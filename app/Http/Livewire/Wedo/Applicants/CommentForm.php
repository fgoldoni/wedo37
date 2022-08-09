<?php
namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class CommentForm extends Component
{
    use WithCachedRows;

    use WithFileUploads;

    use Actions;

    public int $reply = 0;

    public ?string $content = null;

    public ?string $model = null;

    public ?int $modelId = null;

    public ?string $upload = null;

    public ?string $attachment = null;

    public function mount(string $model, int $modelId)
    {
        $this->model = $model;
        $this->modelId = $modelId;
    }

    public function rules(): array
    {
        return [
            'reply' => ['required', 'integer'],
            'content' => ['required', 'string'],
        ];
    }

    public function updatedUpload($file)
    {
        $this->attachment = app()->make(ApiInterface::class)->attach($file)->post('/attachments/applicant', [
            'type' => 'resumes',
            'name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'resumes' => 'resumes',
            'size' => $file->getSize(),
            'user_id' => auth()->user()?->id,
            'hashName' => $file->hashName(),
            'applicantId' => $this->modelId,
        ])->data->name;

        $this->notification()->success(__('Updated'), __('The Attachment has been successfully saved!'));

        $this->emitTo(Item::class, 'refreshComponent');
    }

    public function saveComment()
    {
        $this->validate();

        $response = app()->make(ApiInterface::class)->post('/comments', [
            'reply' => $this->reply,
            'content' => $this->content,
            'model' => $this->model,
            'modelId' => $this->modelId,
        ]);

        $this->forget(cache_path('comments') . '-' . $this->modelId);

        $this->emitTo(Comments::class, 'refreshComponent');

        $this->notification()->success(__('Updated'), $response->message);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.wedo.applicants.comment-form');
    }
}
