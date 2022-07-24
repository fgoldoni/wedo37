<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Comments extends Component
{
    use WithCachedRows;

    private array $comments;

    public function mount(string $model, int $modelId)
    {
        $this->comments = $this->cache(
            fn () => $this->apiComments($model, $modelId),
            config('app.system.cache.keys.comments') . '-' . $modelId
        );
    }

    public function render()
    {
        return view('livewire.wedo.applicants.comments', ['comments' => $this->comments]);
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
