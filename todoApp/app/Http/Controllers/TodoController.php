<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function getTodo(){
        $todo = Todo::where('id', 1)->first();
    }
}
