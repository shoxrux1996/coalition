<?php

namespace App\Livewire;

use App\Actions\Project\GetAllProjectsWithTasks;
use App\Actions\Task\ReorderTask;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ProjectComponent extends Component
{
    public $projects;

    /** @prop */
    public $selected = '';

    #[Computed]
    public function selectedProject()
    {
        return $this->projects?->firstWhere('id', $this->selected);
    }

    public function updateTaskOrder($tasks, ReorderTask $reorderTaskAction)
    {
        $reorderTaskAction->reorder($tasks);
    }

    public function mount(GetAllProjectsWithTasks $projectAction)
    {
        $this->projects = $projectAction->all();
        $this->selected = $this->projects->first()?->id;
    }

    public function render()
    {
        return view('livewire.project-component');
    }
}
