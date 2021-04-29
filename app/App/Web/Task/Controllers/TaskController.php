<?php

namespace App\Web\Task\Controllers;

use Domain\Tesk\Models\Task;
use App\Core\Http\Controllers\Controller;
use App\Web\Task\Requests\TaskRequest;
use Domain\Tesk\Actions\CreateTaskAction;
use Domain\Tesk\DataTransferObjects\TaskData;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = app(Task::class)->get();

        return view('welcome', compact('tasks'));
    }

    public function store(TaskRequest $request, CreateTaskAction $action)
    {
        $data = TaskData::formRequest($request);

        $action($data);

        return back()->with(['success' => 'Tarefa criada com sucess']);
    }
}