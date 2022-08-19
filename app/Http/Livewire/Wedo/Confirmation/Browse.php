<?php

namespace App\Http\Livewire\Wedo\Confirmation;

use App\Http\Services\Contracts\ApiInterface;
use Livewire\Component;

class Browse extends Component
{
    public ?string $orderId = null;

    protected $queryString = [
        'orderId',
    ];

    public function getRowProperty()
    {
        return $this->apiOrder();
    }

    public function render()
    {
        return view('livewire.wedo.confirmation.browse', ['order' => $this->row]);
    }

    private function apiOrder()
    {
        return app()->make(ApiInterface::class)->get('/orders/' . $this->orderId)->data;
    }
}
