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
        $form = $request->all();
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }
    public function remove(TodoRequest $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/');
    }
    public function search()
    {
        $list = Todo::all();
      return view('/search',['list' => $list]);        
    }
}