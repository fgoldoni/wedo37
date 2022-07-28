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
        'editComment'
    ];

    public int $editId = 0;

    public function mount(string $model, int $modelId)
    {
        $this->useCachedRows();

        $this->comments = $this->cache(
            fn () => $this->apiComments($model, $modelId),
            cache_path('comments') . '-' . $modelId
        );
    }

    public function editComment(int $id)
    {
        $this->editId = $id;
    }

    public function render()
    {
        return view('livewire.wedo.applicants.comments');
    }

    private function apiComments(string $model, int $modelId)
    {
        return app()->make(ApiInterface::class)->get(
            '/comments',
            [
                'model' => $model,
                'modelId' => $modelId,
            ]
        )->data;
    }
}
