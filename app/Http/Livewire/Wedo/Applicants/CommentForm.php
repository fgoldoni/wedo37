<?php

namespace App\Http\Livewire\Wedo\Applicants;

use Livewire\Component;

class CommentForm extends Component
{
    public int $comment;

    public function render()
    {
        return view('livewire.wedo.applicants.comment-form');
    }
}
