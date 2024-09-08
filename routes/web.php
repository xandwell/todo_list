<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [TaskController::class, 'index'])->name('tasks.index')->middleware('auth');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store')->middleware('auth');
Route::post('/tasks/{id}/complete', [TaskController::class, 'complete'])->name('tasks.complete')->middleware('auth');
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete')->middleware('auth');

