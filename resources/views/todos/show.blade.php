@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="text-center">

            <h1 class=" my-10 ">

                {{ $todo->name}}

            </h1>
        </div>
        <div class=" card card-default">
            <div class="card header text-center">
                details
            </div>
            <div class="card-body">
                {{$todo->description}}
            </div>
            
        </div>
        <a href="/todo/{{$todo->id}}/edit" class="btn btn-info my-2 ">update</a>
        <a href="/todo/{{$todo->id}}/delete" class="btn btn-danger my-2">delete</a>
    </div>
</div>
@endsection