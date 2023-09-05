<div class=" rounded-xl bg-white">
    <div class="">
        <div class="flex items-center justify-between px-5 pt-5">
            <div class="form-select px-4 py-3 rounded-full">
                <livewire:create-task-component :$selected />
            </div>
            <div class="flex items-center">
                <label class="text-lg"> Project: </label>
                <select class="form-select px-4 py-3 rounded-full" wire:model.live="selected" name="proj">
                    @foreach ($projects as $project)
                    <option value="{{$project->id}}">{{$project->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="flex p-10">
        <ul wire:sortable="updateTaskOrder" class="w-1/2 space-y-4 text-left text-gray-500 dark:text-gray-400">
            @foreach ($this->selectedProject->tasks as $task)
            <livewire:update-task-component :id="$task->id" :name="$task->name" :createdAt="$task->created_at"
                :updatedAt="$task->updated_at" wire:key="task-{{ $task->id }}" />
            @endforeach
        </ul>
    </div>
</div>