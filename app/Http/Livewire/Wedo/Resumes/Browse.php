<?php

namespace App\Http\Livewire\Wedo\Resumes;

use App\Http\Services\Contracts\ApiInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Browse extends Component
{
    use WithFileUploads;

    public ?string $upload = null;

    protected array $rules = [
        'upload' => 'nullable|mimes:.doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf|max:1000',
    ];

    public function updatedUpload($file)
    {
        $this->validateOnly($file);

        $response = app()->make(ApiInterface::class)->attach($file)->post('/attachments', [
            'type' => 'resumes',
            'name' => $file->getClientOriginalName(),
            'mime_type' => $file->getMimeType(),
            'resumes' => 'resumes',
            'size' => $file->getSize(),
            'user_id' => auth()->user()?->id,
            'hashName' => $file->hashName(),
        ]);

        $this->emit('onRefreshResume', $response->data);

    }

    public function render()
    {
        return view('livewire.wedo.resumes.browse');
    }
}
