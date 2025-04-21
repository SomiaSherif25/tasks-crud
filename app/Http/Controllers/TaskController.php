<?php

namespace App\Http\Controllers;

use App\Facades\TaskFacade;
use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Services\ApiResponseFormat;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $tasks = TaskFacade::getAllTasks();
        return ApiResponseFormat::successPagination($tasks,'All Tasks',1,1,1,10);
    }

    public function store(TaskRequest $request){
        $task = TaskFacade::createTask($request);
        return ApiResponseFormat::success($task,'Task Created Successfully');
    }

    public function update(TaskRequest $request, $id){
        $task = TaskFacade::updateTask  ($id, $request);
        if (!$task) {
            return ApiResponseFormat::error([], 'Task not found', 404);
        }
        return ApiResponseFormat::success($task,'Task Updated Successfully');
    }

    public function destroy($id){
        $task = TaskFacade::deleteTask($id);
        if (!$task) {
            return ApiResponseFormat::error([], 'Task not found', 404);
        }
        return ApiResponseFormat::success([],'Task Deleted Successfully');
    }

    public function show($id){
        $task = TaskFacade::getTaskById($id);
        if (!$task) {
            return ApiResponseFormat::error([], 'Task not found', 404);
        }
        return ApiResponseFormat::success($task,'Task Retrieved Successfully');
    }
}
