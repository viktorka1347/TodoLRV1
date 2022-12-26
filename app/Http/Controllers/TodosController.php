<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $uri = $request->path();
        if ($uri === '/') {
            return view('todo.index', ['appName' => 'Todos app']);
        }
        if ($uri === 'todo') {
            $list = Todo::all();
            if (count($list) === 0) {
                return redirect()->route('todo.index');
            }

            return view('todo.list', ['list' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uri = $request->path();
        if ($uri === 'todo/create' && count(Todo::all()) === 0) {
            Todo::create([
                'title' => 'Задача 1',
                'description' => 'Составить список задач',
            ]);
            Todo::create([
                'title' => 'Задача 2',
                'description' => 'Выполнить первую задачу списка',
            ]);
            Todo::create([
                'title' => 'Задача 3',
                'description' => 'Осознать, что 2 пункта уже выполнено',
            ]);
            Todo::create([
                'title' => 'Задача 4',
                'description' => 'Отдохнуть',
            ]);
        }
        return redirect()->route('todo.list');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id) {
            $item = Todo::find($id);
            if ($item) {
                return view('todo.item', ['item' => $item]);
            }
        }
        return redirect()->route('todo.list');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Todo $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}