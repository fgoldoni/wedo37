<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Item extends Component
{
    use WithCachedRows;

    private ?\stdClass $applicant = null;

    protected $listeners = [
        'refreshComponent' => 'apiApplicant'
    ];

    public int $applicantId;

    public function mount(int $id)
    {
        $this->applicantId = $id;

        $this->apiApplicant();
    }

    public function apiApplicant()
    {
        $this->applicant = $this->cache(
            fn () => app()->make(ApiInterface::class)->get('/applicants/' . $this->applicantId)->data,
            'current-applicant-' . $this->applicantId
        );
    }

    public function render()
    {
        return view(
            'livewire.wedo.applicants.item',
            ['applicant' => $this->applicant, 'job' => $this->applicant?->job]
        );
    }
}
