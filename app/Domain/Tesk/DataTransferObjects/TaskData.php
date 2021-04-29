<?php

namespace Domain\Tesk\DataTransferObjects;

use App\Web\Task\Requests\TaskRequest;
use Spatie\DataTransferObject\DataTransferObject;

class TaskData extends DataTransferObject
{
    /** @var string */
    public $task;

    /** @var string */
    public $category;

    public static function formRequest(TaskRequest $taskRequest): TaskData
    {
        return new self([
            'task' => $taskRequest['task'],
            'category' => $taskRequest['category'],
        ]);
    }
}