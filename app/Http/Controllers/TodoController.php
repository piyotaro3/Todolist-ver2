<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Todo;
use App\Models\Tag;
use App\Http\Requests\TodoRequest;
use illuminate\support\Facades\Auth;


class TodoController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $lists = Todo::where('user_id', Auth::user()->id)->get();
        $tags = Tag::all();

        $param = ['lists' => $lists, 'user' => $user, 'tags' => $tags];

        return view('Todo', $param);
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
    public function find()
    {
        $lists = [];
        $user = Auth::user();
        $tags = Tag::all();
        $param = ['lists' => $lists, 'user' => $user, 'tags' => $tags];
        return view('search', $param, );

    }

    public function search(Request $request)
    {
        $todoname = $request->input('todoname', 'tag_id');
        $tags = Tag::all();
        $user = Auth::user();
        $lists = Todo::where('user_id', Auth::user()->id)->where('todoname', 'LIKE BINARY', "%{$todoname}%")->orwhere('tag_id', 'tag_id')->get();
        $param = [

            'lists' => $lists,
            'user' => $user,
            'tags' => $tags,
        ];
        return view('search', $param);

    }
}