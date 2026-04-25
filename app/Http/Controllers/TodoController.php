<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::with('category')->get();
        return view('todos.index', compact('todos'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('todos.create', compact('categories'));
    }

    public function store(Request $request)
    {
        Todo::create($request->all());
        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        $categories = Category::all();
        return view('todos.edit', compact('todo', 'categories'));
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update($request->all());
        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
}