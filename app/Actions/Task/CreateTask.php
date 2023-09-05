<?php

namespace App\Actions\Task;

use App\Models\Task;

class CreateTask
{
    public function create(string $name, int $projectId)
    {
        $task = Task::create([
            'name' => $name,
            'project_id' => $projectId,
            'priority' => 1,
        ]);

        return $task;
    }
}
