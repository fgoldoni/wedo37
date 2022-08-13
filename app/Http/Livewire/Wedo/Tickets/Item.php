<?php
namespace App\Http\Livewire\Wedo\Tickets;

use App\Http\Livewire\Wedo\WithCachedRows;
use App\Http\Services\Contracts\ApiInterface;
use App\Models\Ticket;
use Livewire\Component;
use WireUi\Traits\Actions;

class Item extends Component
{
    use WithCachedRows;

    use Actions;

    public ?int $ticketId = null;

    protected $queryString = ['filters'];

    public array $filters = [
    ];

    public function mount()
    {
    }

    public function resetFilters()
    {
        $this->reset('filters', 'show');
    }

    public function getRowsQueryProperty()
    {
        return $this->apiTicket();
    }

    private function apiTicket()
    {
        return app()->make(ApiInterface::class)->get('/tickets/' . $this->ticketId)->data;
    }

    public function getRowProperty()
    {
        return $this->cache(fn () => $this->rowsQuery);
    }

    public function render()
    {
        return view('livewire.wedo.tickets.item', ['ticket' => $this->row]);
    }
}
