<?php 
namespace App\Services;

use App\Http\Requests\TaskRequest;
use App\Http\Resources\TaskResource;
use App\Interfaces\TaskServiceInterface;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskService implements TaskServiceInterface
{
    public function createTask(TaskRequest $request){
        $validated = $request->validated();
        $task = Task::create($validated);
        return new TaskResource($task);
    }

    public function updateTask($id, TaskRequest $request){
        $task = Task::findOrFail($id);
        if(!$task){
            return false;
        }
        $validated = $request->validated();
        $task->update($validated);
        return new TaskResource($task);
    }
    public function deleteTask($id){
        $task = Task::findOrFail($id);
        if(!$task){
            return false;
        }
        $task->delete();
        return true;
    }
    public function getAllTasks(){
        $tasks = Task::all();
        return $tasks;
    }

    public function getTaskById($id){
        $task = Task::findOrFail($id);
        if(!$task){
            return false;
        }
        return new TaskResource($task);
    }
}