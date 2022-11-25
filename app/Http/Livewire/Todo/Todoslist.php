<?php

namespace App\Http\Livewire\Todo;

use Livewire\Component;
use App\Models\Todo;

class Todoslist extends Component
{
    public string $title = '';
    protected $listeners = [
        'refreshParent' => '$refresh'
    ];

    public function render()
    {
        return view('livewire.todo.todoslist',[
            'todos' => [
                'incomplete' => Todo::where('status',0)->oldest('status')->get(),
                'complete' => Todo::where('status',1)->oldest('status')->get()
            ]
        ]);
    }

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:500'
        ]);

        Todo::create([
            'title' => $this->title,
            'status' => 0
        ]);

        $this->reset('title');
    }


}
