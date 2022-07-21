<?php
namespace App\Http\Livewire\Wedo\Resumes;

use App\Http\Livewire\Wedo\Datatables\ResumesTable;
use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Resume;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;
    use Actions;
    use WithCachedRows;

    public ?string $upload = null;

    public int $total = 0;

    protected $listeners = ['onRefreshBrowse' => 'refreshTotal'];

    public function mount()
    {
        $this->total = Resume::count();
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

        $this->emitTo(ResumesTable::class, 'onRefreshResume');

        $this->refreshTotal();
    }

    public function refreshTotal()
    {
        $this->forget(config('app.system.cache.keys.resumes'));
        $this->forget(config('app.system.cache.keys.attachments'));

        $this->total = Resume::count();
    }

    public function render()
    {
        return view('livewire.wedo.resumes.browse');
    }
}
