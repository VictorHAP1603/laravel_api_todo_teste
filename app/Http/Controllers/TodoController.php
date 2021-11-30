<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TodoController extends Controller
{
    public function getAll(Request $request) {
        return Task::getAll();
    }
}
