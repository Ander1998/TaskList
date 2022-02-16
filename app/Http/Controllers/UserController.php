<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function store($request)
    {
        $request->validated();
        User::create([
            'name' =>$request->get('nameUser'),
            'surname' =>$request->get('surnameUser')
        ]);
        return redirect('/viewAddTask');
    }

    public function  searchForm()
    {
        return view('searchUserForm');
    }

    public function show(Request $request)
    {
        $searchedQuery = null;

        if ($request->get('name') != null && $request->get('date') != null) {

            $searchedQuery = User::with(['tasks' => function ($query) use ($request) {
                $query->where('created_at', 'like', $request->get('date') . '%');
            }])->where('name', 'like', $request->get('name'))->get();

        } elseif ($request->get('name') != null) {

            $searchedQuery = User::with('tasks')->where('name', 'like', $request->get('name'))->get();

        } elseif ($request->get('date') != null) {

            $searchedQuery = User::with(['tasks' => function ($query) use ($request) {
                $query->where('created_at', 'like', $request->get('date') . '%');
            }])->get();

        } else {

            $searchedQuery = User::with('tasks')->get();
            
        }

        return view('searchedUser', ['users' => $searchedQuery]);
    }
}
