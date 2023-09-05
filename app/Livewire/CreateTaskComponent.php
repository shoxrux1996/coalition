<?php

namespace App\Livewire;

use App\Actions\Task\CreateTask;
use App\Actions\Task\ReorderTask;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreateTaskComponent extends Component
{
    /** @prop */
    #[Rule('required')]
    public $name;

    public $selected;

    public function create(CreateTask $createTaskAction, ReorderTask $reorderTaskAction)
    {
        $this->validate();

        $task = $createTaskAction->create($this->name, $this->selected);
        $reorderTaskAction->incrementPriorityOtherTasks($task->id, $task->project_id);

        return $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.create-task-component');
    }
}
