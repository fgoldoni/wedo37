<?php
namespace App\Http\Livewire\Wedo\Modals\Popup;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Applicant;
use App\Models\Job;
use App\Rules\Phone;
use App\Rules\RealEmail;
use Livewire\WithFileUploads;
use LivewireUI\Modal\ModalComponent;
use WireUi\Traits\Actions;

class Application extends ModalComponent
{
    use WithFileUploads;

    use Actions;

    use WithCachedRows;

    public Job $job;

    public Applicant $editing;

    public array $attachments = [];

    public array $resumes = [];

    public ?string $upload = null;

    protected $listeners = ['refreshComponent' => '$refresh'];

    public function rules(): array
    {
        return [
            'editing.message' => ['required', 'min:4'],
            'editing.email' => ['required', 'email', new RealEmail()],
            'editing.phone' => ['required', 'min:6', new Phone()],
            'resumes' => ['required', 'array', 'min:1'],
            'resumes.*' => ['required', 'integer'],
        ];
    }

    public function save()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/applicants', [
            'phone' => $this->editing->phone,
            'message' => $this->editing->message,
            'email' => $this->editing->email,
            'resumes' => $this->resumes,
            'job_id' => $this->job->id,
        ]);

        $this->notification()->success(__('Updated'), $response->message);

        $this->forget(config('app.system.cache.keys.applicants'));
        $this->forget(config('app.system.cache.keys.applicants_browse'));

        $this->closeModal();
    }

    public function mount($id): void
    {
        $this->useCachedRows();

        $this->job = Job::findOrFail($id);

        $this->editing = $this->makeBlankApplicant();

        if (auth()->check()) {
            $this->attachments = $this->cache(
                fn () => app()->make(ApiInterface::class)->get('/resumes')->data,
                config('app.system.cache.keys.attachments')
            );
        } else {
            $this->attachments = $this->cache(
                fn () => [],
                config('app.system.cache.keys.attachments')
            );
        }
    }

    public function render()
    {
        return view('livewire.wedo.modals.popup.application');
    }

    public function updatedUpload($file)
    {
        $response = app()->make(ApiInterface::class)->attach($file)->post('/attachments', [
            'type' => 'resumes',
            'name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'resumes' => 'resumes',
            'size' => $file->getSize(),
            'user_id' => auth()->user()?->id,
            'hashName' => $file->hashName(),
        ]);

        $this->notification()->success(__('Updated'), __('The resume has been successfully created!'));

        $this->refreshAttachments($response->data);
    }

    private function makeBlankApplicant()
    {
        return Applicant::make(['email' => auth()->user()?->email]);
    }

    private function refreshAttachments($attachment)
    {
        $this->attachments[] = $attachment;

        $this->forget(config('app.system.cache.keys.resumes'));

        $this->forget(config('app.system.cache.keys.attachments'));

        $this->putCache(config('app.system.cache.keys.attachments'), $this->attachments);
    }
}
