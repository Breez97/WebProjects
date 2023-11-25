<html>
    <head>
        <title>Авторизация</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <form action="insert.php" method="POST">
            <table width=400>
                <tr>
                    <td colspan=2 class="header">Авторизация пользователя<br>Введите ваши данные</td>
                </tr>
                <tr>
                    <td>Логин</td>
                    <td><input type="text" name="login" required></td>
                </tr>
                <tr>
                    <td>Пароль</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td colspan=2 align="center"><button type="submit">Войти<br></button></td>
                </tr>
            </table>
        </form>
        <form action="1.php" method="POST">
            <button type="submit">Вернуться на главную</button>
        </form>
    </body>
</html>