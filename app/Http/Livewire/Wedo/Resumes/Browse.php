<?php

namespace App\Http\Livewire\Wedo\Resumes;

use App\Http\Livewire\Wedo\Datatables\ResumesTable;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use Livewire\TemporaryUploadedFile;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;
    use Actions;

    public ?string $upload = null;

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

        $this->emitTo(ResumesTable::class, 'onRefreshResume', $response->data);

    }

    public function render()
    {
        return view('livewire.wedo.resumes.browse');
    }
}
