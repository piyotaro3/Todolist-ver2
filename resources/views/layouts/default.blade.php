<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Todo List')</title>
    <style>
        .content {
            background-color: darkblue;
            height: 100vh;
            width: 100%;
            position: relative;
        }

        .card {
            background-color: #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            width: 50vw;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            padding: 30px;
        }

        .tittle {
            font-weight: bold;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 15px;
        }

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

        tr {
            width: 100%;
        }

        th {
            margin-bottom: 10px;
        }

        .update_text {
            width: 90%;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            appearance: none;
            font-size: 14px;
            outline: none;
            text-align: left
        }

        .update_button {
            border-color: #fa9770;
            font-size: 12px;
            color: #fa9770;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
        }

        .delete_button {
            border-color: #71fadc;
            font-size: 12px;
            color: #71fadc;
            background-color: #fff;
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.4s;
            outline: none;
        }
    </style>
</head>

<body>
    <div class=@yield('Todo List')>
        <div class="content">
            <div class="card">
                <h1 class="tittle">Todo List</h1>
                <div class="default_todo">
                    @yield('cotnent')
                    <form action="/create" method="post">
                        @csrf
                        <div class="todo_create">
                            <input type="text" class="todo_name" name="todoname">
                            <input type="submit" class="create_button" value="追加">
                        </div>
                    </form>
                    <table class="defaul_table">
                        <tr>
                            <th>作成日</th>
                            <th>タスク名</th>
                            <th>更新</th>
                            <th>削除</th>
                        </tr>
                        @foreach ($lists as $list)
                            <tr>
                                <td>{{ $list->created_at }}</td>

                                <form action="/update" method="post">
                                    @csrf
                                    <td>
                                        <input type="hidden" name="id">
                                        <input type="text" class="update_text" name="todoname"
                                            value="{{ $list->todoname }}">
                                    </td>
                                    <td class="update_button">
                                        <input type="submit" class="update_button" value="更新">
                                    </td>
                                </form>
                                <form action="/delete" method="post">
                                    @csrf
                                    <td class="delete_button">
                                        <input type="submit" class=delete_button value="削除">
                                    </td>
                                </form>
                            </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
</body>
