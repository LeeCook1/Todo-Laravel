<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;

class Eachtodo extends Component
{
    public $todovar;
    public function render()
    {
        return view('livewire.todo.eachtodo');
    }
}
