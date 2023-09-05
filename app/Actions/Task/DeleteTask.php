<?php

namespace App\Actions\Task;

use App\Models\Task;

class DeleteTask
{
    public function delete(int $id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return $task;
    }
}
