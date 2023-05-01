@extends('layouts.layout')
<style>
    .search-btn {
        display: inline-block;
        border: 2px solid #cdf119;
        color: #cdf119;
        text-decoration: none;
        margin-bottom: 10px;
        text-align: left;
        font-size: 12px;
        background-color: #fff;
        font-weight: bold;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.4s;
        outline: none;
    }

    .create_button {
            text-align: left;
            border: 2px solid #dc70fa;
            font-size: 12px;
            color: #dc70fa;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
        }

         .todo_create {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            width: 100%;

        }

        .todo_name {
            width: 80%;
            border-radius: 5px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 14px;
            padding: 5px;
        }

</style>
 
@section('content') 

 @section('find')
    <a class="search-btn" href="/todo/find">
        タスク検索
    </a>
 @endsection

 @section('todolist')
 <div class="default_todo">
                <form action="/todo/create" method="post">
                    @csrf
                    @error('todoname')
                        <p>{{ $message }}</p>
                    @enderror
                    <div class="todo_create">
                        <input type="text" class="todo_name" name="todoname">
                        <select name="tag_id" class=select_tag>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @yield('create_btn')
                        <input type="hidden" name="user_id" value="{{ $user->id }}">
                        <input type="submit" class="create_button" value='追加'>
                    </div>
                </form>
@endsection
@endsection
