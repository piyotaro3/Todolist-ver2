@extends('layouts.default')
<style>
    form {
        width: 100%;
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

    table {
        width: 100%;
        text-align: center
    }

    th {
        margin-bottom: 10px;
    }
</style>

@section('Todo List', 'Todo.blade.php')

@section('Todo List')



