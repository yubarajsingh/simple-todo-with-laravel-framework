@extends('layouts.app')

@section('content')

<div class="text-center">
    <h1> Todos App</h1>
    <a href="/newTodo" class="btn btn-primary btn-sm float-right mr-md-3 pr-10"> Add New Todo</a>
</div>




<div class="card-body">
    <div class="card-header text-center">
        Todo
        
        <ul class="list-group">

            @foreach($todos as $todo)


            <div class="list-group-item ">{{$todo->name}}
                @if (!$todo->completed)
                <a href="/todo/{{$todo->id}}/complete" class="btn btn-warning btn-sm float-right mr-md-3"> complete</a>    
                @endif
                
                <a href="/todo/{{$todo->id}}" class="btn btn-primary btn-sm float-right mr-md-3 pr-10"> view</a>
            </div>
            <div class="list-group-item">{{$todo->description}}</div>



            @endforeach
        </ul>
    </div>
    @endsection