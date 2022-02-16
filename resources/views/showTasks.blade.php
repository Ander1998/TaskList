@extends('layouts.index')

@section('addBlock')
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Current total active tasks</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">User</th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @if(count($tasks) > 0)
                @each('partials.button', $tasks, 'task')
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection