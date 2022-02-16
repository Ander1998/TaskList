@extends('layouts.index')

@section('addBlock')
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Search Task</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <strong>Search</strong>
        <form action="/searchedTask">
            <input type="text" name="search" class="form-control" placeholder="enter your search" />
            <br>
            <button type="submit" class="btn border ">Search</button>
        </form>
    </div>
</div>
@yield('searchedTasks')
@endsection