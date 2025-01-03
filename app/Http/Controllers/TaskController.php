<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    public function index()
    {
        // Return the tasks as a JSON response
        return TaskResource::collection(Task::paginate(10));
    }
}
