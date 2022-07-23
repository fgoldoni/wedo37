<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Item extends Component
{
    use WithCachedRows;

    private \stdClass $applicant;

    public function mount(int $id)
    {
        $this->useCachedRows();

        $this->applicant = $this->cache(fn () => $this->apiApplicant($id), 'current-applicant-' . $id);
    }

    private function apiApplicant(int $id)
    {
        return app()->make(ApiInterface::class)->get('/applicants/' . $id)->data;
    }

    public function render()
    {
        return view('livewire.wedo.applicants.item', ['applicant' => $this->applicant, 'job' => $this->applicant->job]);
    }
}
