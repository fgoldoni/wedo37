<?php

namespace App\Http\Livewire\Wedo\Applicants;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Models\Applicant;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\Actions;

class Browse extends Component
{
    use WithFileUploads;
    use Actions;
    use WithCachedRows;

    public int $total = 0;

    protected $listeners = ['onRefreshBrowse' => 'refreshTotal'];

    public function mount()
    {
        $this->total = Applicant::count();
    }

    public function refreshTotal()
    {
        $this->forget(config('app.system.cache.keys.applicants'));

        $this->total = Applicant::count();
    }

    public function render()
    {
        return view('livewire.wedo.applicants.browse');
    }
}
