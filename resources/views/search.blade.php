@extends('layouts.layout')
<style>
    .btn-back {
        border: 2px solid #6d7170;
        color: #6d7170;
        background-color: #fff;
        text-decoration: none;
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

    .search_button {
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

         .todo_search {
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
 @section('todolist')
    <form action="/todo/search" method="get">
        @csrf
        <div class="todo_search">
            <input type="text" class="todo_name" name="todoname">
            <select name="tag_id" class=select_tag>
                @foreach ($tags as $tag)
                    <option value=""hidden></option>
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                @endforeach
            </select>
            <input type="submit" class="search_button" value="検索">
        </div>
    </form>
 @endsection
    @section('back')
        <a class="btn-back" a href="/">戻る</a>
    @endsection
@endsection
