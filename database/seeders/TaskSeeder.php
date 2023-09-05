<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = Project::get();

        foreach ($projects as $project) {
            $tasks = Task::factory()->for($project)->count(12)->create();
            $priority = 0;

            foreach ($tasks as $task) {
                $task->update([
                    'priority' => ++$priority,
                ]);
            }
        }

    }
}
