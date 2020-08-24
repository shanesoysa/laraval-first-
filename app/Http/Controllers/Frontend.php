<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class Frontend extends Controller
{
    public function test(){
        // $obj = new task;
        $obj=task::all();
        
        return view('test')->with('tasks',$obj);
    }
    public function save(request $request){
        // dd('hhhhhhh');
        $obj = new task;
        $obj -> name = $request->name;
        $obj -> value = $request->value;
        $obj -> save();

        return redirect('test');

    }

    public function updateform(){
        $task=task::find($id);

        return view('test')->with('uptasks',$task);
    }

    public function deleteform($id){
        $task=task::find($id);
        $task->delete();
        return redirect('test');
    }
}
