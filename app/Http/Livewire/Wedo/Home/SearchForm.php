<?php

namespace App\Http\Livewire\Wedo\Home;

use Livewire\Component;

class SearchForm extends Component
{
    public ?string $model = null;

    public function render()
    {
        return view('livewire.wedo.home.search-form');
    }
}
