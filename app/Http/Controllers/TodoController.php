<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        $todos=Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    public function show($todoId)
    {   
        //diedump
            // dd($todoId);

        return view('todos.show')->with('todo',Todo::find($todoId)); 
    }

    public function new(){
        return view('todos.new');
    }

    public function store(){

        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        //dd(request()->all());
        $data=request()->all();
        $todo=new Todo();
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=false;
        $todo->save();
        session()->flash('success','saved sucessfully');
        return redirect('/todo');
    }

    public function edit(Todo $todo)
    {
       
        return view('todos.edit')->with('todo',$todo);
       
    }

    public function update($todoId){

        $this->validate(request(),[
            'name'=>'required',
            'description'=>'required'
        ]);
        // dd(request());
        $data=request()->all();
        $todo=Todo::find($todoId);
        
        $todo->name=$data['name'];
        $todo->description=$data['description'];
        $todo->completed=false;
        $todo->save();
        session()->flash('success','updated sucessfully');
        return redirect('/todo');
    }


    public function delete($todoId)
    {
        $todo=Todo::find($todoId);
        $todo->delete();
        session()->flash('success','Deleted sucessfully');
        return redirect('/todo');
        
    }
    public function complete(Todo $todo)
    {
        $todo->completed=true;
        $todo->save();
        session()->flash('success','congratulation for completion sucessfully');
        return redirect('/todo');
    }
}