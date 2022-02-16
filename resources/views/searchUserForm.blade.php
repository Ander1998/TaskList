@extends('layouts.index')

@section('addBlock')
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Search Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Search</strong>
        <form method="post" action="/searchedUser">
            {{ @csrf_field() }}
            <input type="text" name="name" class="form-control" placeholder="Enter user name" />
            <br>
            <input type="date" name="date" class="form-control" />
            <br>
            <button type="submit" class="btn border ">Search</button>
        </form>
    </div>
</div>
@yield('searchedUser')
@endsection