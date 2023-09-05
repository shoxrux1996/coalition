<div>
    <div class="flex items-center justify-between">
        <input wire:model.blur="name" name="name" placeholder="Enter a new task..."
            class="@error('name') border-red-600 @enderror bg-gray-50 border text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mr-2" />
        <button wire:click="create"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">create</button>
    </div>

</div>