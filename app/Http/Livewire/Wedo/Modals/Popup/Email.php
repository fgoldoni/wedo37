<?php
namespace App\Http\Livewire\Wedo\Modals\Popup;

use LivewireUI\Modal\ModalComponent;

class Email extends ModalComponent
{
    public function render()
    {
        return view('livewire.wedo.modals.popup.email');
    }
}