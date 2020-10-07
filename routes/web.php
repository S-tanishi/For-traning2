<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\TaskController;

Route::get('folders/{id}/tasks', [TaskController::class, 'index'])->name('tasks.index');