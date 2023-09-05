<?php

namespace App\Livewire;

use App\Actions\Task\UpdateTask;
use Livewire\Attributes\Rule;
use Livewire\Component;

class UpdateTaskComponent extends Component
{
    /** @prop */
    #[Rule('required')]
    public $name;

    #[Rule('required')]
    public $id;

    public $createdAt;

    public $updatedAt;

    public function update(UpdateTask $updateTaskAction)
    {
        $this->validate();
        $updateTaskAction->update($this->id, $this->name);

        return $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.update-task-component');
    }
}
