@extends('searchUserForm')

@section('searchedUser')
<div class="row d-flex flex-column align-content-center mt-2">
    <div class="col-4 bg-light border">
        <p class="h4 pt-2">Current Tasks</p>
    </div>
    <div class="col-4 border pt-2 pb-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Task</th>
                    <th scope="col">Created at</th>
                    <th scope="col">User Name</th>
                </tr>
            </thead>
            <tbody class="align-middle">
                @if(count($users) > 0)
                @foreach($users as $user)
                @foreach($user->tareas as $task)
                <tr>
                    <td>{{ $task->name }}</td>
                    <td>{{ $task->created_at }}</td>
                    <td>{{ $user->name }}</td>
                </tr>
                @endforeach
                @endforeach
                @endif

            </tbody>
        </table>
    </div>
</div>
@endsection