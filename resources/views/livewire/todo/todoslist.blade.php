<div>
    <h1> My Tasks </h1>

    <div>
        @if (session()->has('message'))
            <div>{{ session('message') }}</div>
        @endif
        <div>TO-DO</div>
        @foreach ($incomplete as $itodo)
           <livewire:todo.eachtodo :todovar="$itodo" :wire:key="'each-todo-'.$itodo->key">
        @endforeach
    </div>

    <div>
        <div>COMPLETED</div>
        @foreach ($complete as $ctodo)
           <livewire:todo.eachtodo :todovar="$ctodo" :wire:key="'each-todo-'.$ctodo->key">
        @endforeach
    </div>

    <div>
        <label for="new-task">New Task</label>
        <input name="new-task" type="text" wire:model="title">
        <button wire:click="store" type="button">+ Add</button>
    </div>
</div>
