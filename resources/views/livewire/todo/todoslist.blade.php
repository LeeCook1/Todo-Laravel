<div class="block bg-white border rounded-lg " style="width:40%;margin:auto auto;margin-top:20px;font-family: Arial, sans-serif;">
    <h3 class="mb-4 text-2xl text-gray-900 dark:text-white" style="margin:10px;font-weight:bold;">My Tasks</h3>
    <div class="flex flex-col items-center">
        <div class="w-60" style='color:#a0aec0'>TO-DO</div>
        <div>
            <ul class="text-base font-medium text-gray-900 bg-white border border-gray-200 rounded-lg w-60 text-medium dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @foreach ($todos['incomplete'] as $todo)
                    <livewire:todo.eachtodo :todovar="$todo" :wire:key="'each-todo-'.$todo->id">
                @endforeach

            </ul>
        </div>

        <div class="mt-6 w-60 " style='color:#a0aec0'>COMPLETED</div>
        <div>
            <ul class="text-base font-medium text-gray-900 bg-white border border-gray-200 rounded-lg w-60 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                @foreach ($todos['complete'] as $todo)
                    <livewire:todo.eachtodo :todovar="$todo" :wire:key="'each-todo-'.$todo->id">
                @endforeach
            </ul>
        </div>

        <div class="" style="margin-top:20px;background-color:#edf2f7;width:100%;height:80px">

            <div class="text-sm" style="margin-top:15px; margin-left:10px">New Task</div>
            <div class="inline-flex rounded-lg" style="margin-left:10px; margin-right:10px; margin-bottom:10px;width:95%;">
                <input wire:keydown.enter="store" wire:model.lazy="title" name="todo_input" class="rounded-r-none rounded-l-md " style="border-width:1px;width:80%;height:30px;border-color:#cbd5e1;" type="text">
                <button wire:click="store" class="rounded-l-none btn rounded-r-md" style="border-width:1px;border-color:#cbd5e1;color:#4a5568;background-color:#f7fafc;padding-left:10px;padding-right:10px;width:20%"  type="button">
                    <span class="text-xl">+</span>
                    Add
                </button>

            </div>
            <h1>{{$title}}</h1>

        </div>
    </div>
</div>
