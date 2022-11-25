<div >
    <!-- li:not(:last-child) -->
    <li class="w-full py-2 border-b border-gray-200 rounded-t-lg dark:border-gray-600">
        <div class="flex items-center justify-between px-2 space-x-4">
            @if (!$todovar->status)
                <div>{{$todovar->title}}</div>
                <input id="vcheckbox" type="checkbox" wire:change="changeStatus" class="w-4 h-4 px-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
            @else
                <div style="color:#808080;text-decoration:line-through;font-style:italic">{{$todovar->title}}</div>
            @endif
        </div>
    </li>
</div>
