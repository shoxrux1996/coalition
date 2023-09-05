<?php

namespace App\Actions\Task;

use App\Models\Task;

class UpdateTask
{
    public function update(int $id, string $name)
    {
        $task = Task::findOrFail($id);

        $task->update(['name' => $name]);

        return $task;
    }
}
