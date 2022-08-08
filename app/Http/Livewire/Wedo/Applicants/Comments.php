<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Comments extends Component
{
    use WithCachedRows;

    public array $comments = [];

    protected $listeners = [
        'editComment',
        'refreshComponent' => 'apiComments'
    ];

    public int $editId = 0;

    public string $model;

    public int $modelId;

    public function mount(string $model, int $modelId)
    {
        $this->useCachedRows();

        $this->model = $model;

        $this->modelId = $modelId;

        $this->apiComments();
    }

    public function editComment(int $id)
    {
        $this->editId = $id;
    }

    public function apiComments()
    {
        $this->comments = $this->cache(
            fn () => app()->make(ApiInterface::class)->get(
                '/comments',
                [
                    'model' => $this->model,
                    'modelId' => $this->modelId,
                ]
            )->data,
            cache_path('comments') . '-' . $this->modelId
        );
    }

    public function render()
    {
        return view('livewire.wedo.applicants.comments');
    }
}
