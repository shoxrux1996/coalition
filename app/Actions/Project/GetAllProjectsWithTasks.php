<?php

namespace App\Actions\Project;

use App\Models\Project;

class GetAllProjectsWithTasks
{
    public function all()
    {
        return Project::with('tasks')->get();
    }
}
