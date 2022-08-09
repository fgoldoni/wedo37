<?php
namespace App\View\Components\Wedo\Input;

use Illuminate\View\Component;

class Error extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): \Illuminate\Contracts\View\View|\Closure|string
    {
        return view('components.wedo.input.error');
    }
}
