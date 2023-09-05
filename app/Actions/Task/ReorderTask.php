<?php

namespace App\Actions\Task;

use App\Models\Task;

class ReorderTask
{
    public function reorder(array $tasks)
    {
        foreach ($tasks as $data) {
            Task::whereId($data['value'])->update(['priority' => $data['order']]);
        }
    }

    public function incrementPriorityOtherTasks(int $taskId, int $projetId)
    {
        $tasks = Task::whereProjectId($projetId)->whereNot('id', $taskId)->orderBy('priority')->get();

        foreach ($tasks as $task) {
            $task->timestamps = false;
            $task->priority += 1;
            $task->update();
        }
    }
}
