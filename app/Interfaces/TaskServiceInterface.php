<?php

namespace App\Interfaces;

use App\Http\Requests\TaskRequest;

interface TaskServiceInterface
{
    public function createTask(TaskRequest $request);
    public function updateTask($id, TaskRequest $request);
    public function deleteTask($id);
    public function getAllTasks();
    public function getTaskById($id);
}