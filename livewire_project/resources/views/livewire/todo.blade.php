<div>
    <div>
        <br>
        
        <input type="text" wire:model.live.debounce.250ms="todo" class="p-2 border border-gray-300 rounded-md w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="button"  wire:click="add" class="px-4 py-2 font-semibold rounded-md text-white bg-blue-500 hover:bg-blue-700">Add</button>

            @foreach ($todos as $todo)   <!-- | foreach ($array as $value){} |  You can use the for loop to iterate over arrays using the foreach syntax-->
                <li>{{$todo}}</li> 
            @endforeach
    </div>
</div>
