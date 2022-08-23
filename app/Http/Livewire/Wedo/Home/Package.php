<?php
namespace App\Http\Livewire\Wedo\Home;

use App\Models\Ticket;
use Livewire\Component;

class Package extends Component
{
    public function getRowsProperty()
    {
        return Ticket::where('event_id', app_event()->id)
            ->orderBy('position', 'asc')
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.wedo.home.package', ['tickets' => $this->rows]);
    }
}
