@extends('layouts.index')
@section('addBlock')
<div class="row d-flex flex-column align-content-center">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Add a new Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Task Name</strong>
        <form method="POST" action="/task">
            {{ @csrf_field() }}
            @error('taskName')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="taskName" class="form-control" placeholder="Task Name" />

            <br>
            <div class="row">
                <div class="col-6">
                    <select class="form-select" name="userId">
                        <option selected>Select an existing user</option>
                        @if(count($users) > 0)
                        @each('partials.option',$users,'user')
                        @endif
                    </select><br>
                    <button type="submit" class="btn border ">Add a new task</button>

                </div>
                <div class="col-6">
                    @error('userId')
                    <div class="alert alert-danger" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
        </form>
    </div>
</div>
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">New User</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>User</strong>
        <form method="POST" action="/addUser">
            {{ @csrf_field() }}
            @error('userName')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="userName" class="form-control" placeholder="Name" />
            <br>
            @error('userSurname')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
            @enderror
            <input type="text" name="userSurname" class="form-control" placeholder="Surname" />
            <br>
            <button type="submit" class="btn border ">Add a new user</button>
        </form>
    </div>
</div>
@endsection