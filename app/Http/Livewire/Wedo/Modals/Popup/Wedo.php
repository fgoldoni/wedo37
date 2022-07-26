<?php

namespace App\Http\Livewire\Wedo\Modals\Popup;

use LivewireUI\Modal\ModalComponent;

class Wedo extends ModalComponent
{
    public int $area = 4;

    public int $jobType = 185;

    public int $salary;

    public string $startDate;

    public string $name;

    public string $email;

    public string $note;

    public function render()
    {
        return view('livewire.wedo.modals.popup.wedo');
    }
}
