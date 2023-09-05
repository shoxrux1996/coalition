<li wire:sortable-group.handle wire:sortable.item="{{ $id }}" class="flex items-center space-x-3 w-full">
    <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 5.917 5.724 10.5 15 1.5" />
    </svg>

    <form wire:submit.prevent="update" class="w-full">
        <input name="name" wire:model.live="name"
            class="block w-full p-2.5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 " />
    </form>
    <span class="w-1/4">{{$createdAt}}</span>
    <span class="w-1/4">{{$updatedAt}}</span>

    <livewire:delete-task-component :id="$id" />
</li>