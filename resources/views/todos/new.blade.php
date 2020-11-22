@extends('layouts.app')

@section('content')

<div class="h1 text-center my-5">
    Create New Items

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <card-header>
                    Add new Item
                </card-header>
                <div class="card-body">
                    <form action="/store-todo" method="POST">
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                    <li>{{$error}}</li>
                                
                            </div>
                            @endforeach
                        @endif
                        <div class="from-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group ">
                            <textarea name="description" placeholder="description" cols="30" rows="10"
                                class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">
                                create Todo
                            </button>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

    @endsection