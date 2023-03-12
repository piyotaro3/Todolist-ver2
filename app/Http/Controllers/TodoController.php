<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\todo;
use App\Http\Requests\TodoRequest;


class TodoController extends Controller
{
    public function list()
    {
        $lists = Todo::all();
        return view('Todo', ['lists' => $lists]);
    }

    public function create(TodoRequest $request)
    {
        $form = $request->all();
        Todo::create($form);
        return redirect('/');
    }

    public function update(TodoRequest $request)
    {
        $list = $request->find(1);
        unset($list['_token']);
        Todo::where('todoname',$request->todoname)->update($list);
        return view('Todo',);
    }
    public function delete(TodoRequest $request)
    {
        $lists = Todo::find($request->id);
        return view('Todo', ['form' => $lists]);
    }

    public function remove(TodoRequest $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }

    public function test()
    {
        return view('default');
    }
}