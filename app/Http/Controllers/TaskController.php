<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class TaskController extends Controller
{
    public function index()
    {
        $data = Task::with('user')->get();
        return view('showTasks', ['tasks' => $data]);
    }
    /**
     * Show the form for creating a new task
     */
    public function create()
    {
        $users = User::all();
        return view('addTaskForm', ['users' => $users]);
    }

    /**
     * Create a new task
     */
    public function store($request)
    {
        $request->validated();
        Task::create([
            'name' => $request->get('taskName'),
            'user_id' => (int)$request->get('userId')
        ]);
        return redirect('/viewAddTask');
    }

    /**
     * Show the form for search tasks
     */
    public function showForm()
    {
        return view('searchForm');
    }

    /**
     *  Makes the task search
     */
    public function show(Request $request)
    {
        $searchedQuery = Task::with('user')->where('name', 'like', '%' . $request->get('search') . '%')->get();
        return view('searchedTask', ['tasks' => $searchedQuery]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::destroy($id);
        return redirect('/');
    }
}
