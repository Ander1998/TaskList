<tr>
    <td>{{ $task->name }}</td>
    <td>{{ $task->user->name}}</td>
    <td class="text-center">
        <form method="POST" action="/task/{{$task->id}}">
            {{ @csrf_field() }}
            @method('delete')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
        </form>
    </td>
</tr>