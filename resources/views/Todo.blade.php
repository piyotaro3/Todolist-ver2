<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>TodoApp</title>
</head>

<body>
    <div class="cntent">
        <div class="card">
            <h1 class="tittle">Todo List</h1>
            <div class="todoarea">
                <form action="/create" method="post">
                  @csrf
                    <input type="text"  class="todo_name" name="todoname">
                    <input type="submit" class="create_button" value="追加">
                    <table>
                        <div class="tablearea">
                            <tr>
                                <th>作成日</th>
                                <th>タスク名</th>
                                <th>更新</th>
                                <th>削除</th>
                            </tr>
                            <tr>
                                <td>$時間</td>
                                <form action="/update"method="post"></form>
                                <td>
                                    <input type="text" class="update"value="" name="todoname">
                                </td>
                                <td>
                                    <input type="submit" class="update_button" value="更新">
                                </td>

                            </tr>

                        </div>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
