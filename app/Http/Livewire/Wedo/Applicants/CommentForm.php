<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;
use WireUi\Traits\Actions;

class CommentForm extends Component
{
    use WithCachedRows;

    use Actions;

    public int $reply = 0;

    public ?string $content = null;

    public ?string $model = null;

    public ?int $modelId = null;


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
