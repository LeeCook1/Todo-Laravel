<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;

class Todoslist extends Component
{
    public $incomplete, $complete, $title;
    public function render()
    {
        $this->incomplete = Todo::where('status',0)->oldest('status')->get();
        $this->complete = Todo::where('status',1)->oldest('status')->get();

        return view('livewire.todo.todoslist');
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:500'
        ]);

        Todo::create([
            'title' => $this->title
        ]);

        session()->flash('message', 'Todo Created Successfully');
        $this->reset('title');
    }
}
