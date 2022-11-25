<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;

class Eachtodo extends Component
{
    public Todo $todovar;

    public function render()
    {
        return view('livewire.todo.eachtodo', [
            'todovar' => $this->todovar
        ]);
    }

    public function changeStatus()
    {
        $this->todovar->status = !$this->todovar->status;
        $this->todovar->save();
        $this->emitUp('refreshParent');
    }
}
