<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TodoController;
use App\Models\Category;
use App\Models\Todo;
Route::resource('categories', CategoryController::class);
Route::resource('todos', TodoController::class);
Route::get('/', function () {
    $totalCategory = Category::count();
    $totalTodo = Todo::count();

    return view('dashboard', compact('totalCategory', 'totalTodo'));
});