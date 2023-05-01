<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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

        .header {
            display: flex;
            justify-content: space-between;
        }

        .tittle {
            font-weight: bold;
            font-size: 24px;
            margin-top: 0;
            margin-bottom: 15px;
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

        .log-area {
            display: flex;
            align-items: center;
            font-size: 16px;
        }

        .log-name {
            margin-right: 16px
        }

        .logout {
            border: 2px solid #FF0000;
            color: #FF0000;
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

        .select_tag {
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
            outline: none;
        }
    </style>
</head>

<body>
    @yield('cotnent')
    <div class="content">
        <div class="card">
            <div class="header">
                <h1 class="tittle">Todo List</h1>
                <div class="log-area">
                    @if (Auth::check())
                        <p class="log-name">「{{ $user->name }}」でログイン中</p>
                    @endif
                    <form action="/logout" method='post'>
                        @csrf
                        <input type="hidden">
                        <input type="submit" class="logout" value="ログアウト">
                    </form>
                </div>
            </div>

            @yield('find')

            @yield('todolist')

            <table class="defaul_table">
                <tr>
                    <th>作成日</th>
                    <th>タスク名</th>
                    <th>タグ</th>
                    <th>更新</th>
                    <th>削除</th>
                </tr>
                @foreach ($lists as $list)
                    <tr>
                        <td>{{ $list->created_at }}</td>

                        <form action="/todo/update" method="post">
                            @csrf
                            <td>
                                <input type="hidden" name="id" value="{{ $list->id }}">
                                <input type="text" class="update_text" name="todoname" value="{{ $list->todoname }}">
                            </td>
                            {{-- タグについて --}}
                            <td>
                                <select name="tag_id" class=select_tag>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}" selected="selected">
                                            {{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="update_button">
                                <input type="submit" class="update_button" value="更新">
                            </td>
                        </form>
                        <form action="/todo/delete" method="post">
                            @csrf
                            <td class="delete_button">
                                <input type="hidden" name="id" value="{{ $list->id }}">
                                <input type="hidden" class="delete_text" name="todoname" value="{{ $list->todoname }}">
                                <input type="submit" class=delete_button value="削除">
                            </td>
                        </form>
                    </tr>
                @endforeach
            </table>
            @yield('back')
        </div>
    </div>
</body>
