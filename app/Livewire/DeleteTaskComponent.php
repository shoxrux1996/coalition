<?php

namespace App\Livewire;

use App\Actions\Task\DeleteTask;
use Livewire\Component;

class DeleteTaskComponent extends Component
{
    public $id;

    public function delete(DeleteTask $deleteTaskAction)
    {
        $deleteTaskAction->delete($this->id);

        return $this->redirectRoute('home');
    }

    public function render()
    {
        return view('livewire.delete-task-component');
    }
}
