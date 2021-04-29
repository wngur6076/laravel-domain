<?php

namespace Domain\Tesk\Actions;

use Domain\Tesk\DataTransferObjects\TaskData;
use Domain\Tesk\Models\Task;

final class CreateTaskAction
{
    public function __invoke(TaskData $taskData): Task
    {
        return Task::create([
            'task' => $taskData->task,
            'category' => $taskData->category,
        ]);
    }
}