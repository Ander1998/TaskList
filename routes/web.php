<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User routes

Route::post('/addUser', [UserController::class, 'store']);

Route::get('/searchUser', [UserController::class, 'searchForm']);

Route::post('/searchedUser', [UserController::class, 'show']);


//Task routes

Route::get('/', [TaskController::class, 'index'])->name('index');

Route::get('/showTasks', [TaskController::class, 'showTasks'])->name('Tasks');

Route::get('/showSearchTask', [TaskController::class, 'showForm'])->name('search');

Route::get('/searchedTask', [TaskController::class, 'show'])->name('search');

Route::delete('/task/{id}', [TaskController::class, 'destroy']);

Route::get('/viewAddTask', [TaskController::class, 'create'])->name('Add');

Route::post('/task', [TaskController::class, 'store']);