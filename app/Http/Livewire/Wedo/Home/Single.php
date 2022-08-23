<?php
namespace App\Http\Livewire\Wedo\Home;

use App\Models\Ticket;
use Livewire\Component;

class Single extends Component
{
    public function getRowProperty()
    {
        return Ticket::where('event_id', app_event()->id)
            ->where('type', 'single')
            ->first();
    }

    public function render()
    {
        return view('livewire.wedo.home.single', ['ticket' => $this->row]);
    }
}
