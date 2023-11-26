<html>
    <head>
        <title>Добавление записи</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        $login = NULL;
        $password = NULL;
        if(isset($_POST["login"]) && isset($_POST["password"]))
        {
            $login = $_POST["login"];
            $password = $_POST["password"];
            $user_id = NULL;
            $descr = mysqli_connect("localhost", "root", "");
            mysqli_select_db($descr, "products");
            mysqli_set_charset($descr, "utf8");
            $result = mysqli_query($descr, "SELECT * FROM accs WHERE login='$login' AND password='$password'");
            $count = 0;
            while($array = mysqli_fetch_array($result)) $user_id = $array['user_id'];
            if($user_id == NULL)
            {
                printf("<h2>Ошибка авторизации</h2>
                <h3>Неверный логин или пароль</h3>
                <h3>Попробуйте снова</h3>
                <form action='auth.php' method='POST'>
                <input type='hidden' name='inputLogin' value=$login>
                <button type='submit'>Вернуться назад</button>
                </form>");
            }
            else
            {
                $resultUser = mysqli_query($descr, "SELECT * FROM users WHERE user_id=$user_id");
                while($arrayUser = mysqli_fetch_array($resultUser)) $name = $arrayUser['name'];
                printf("<h3>Добро пожаловать, $name</h3>
                <form action='insertAction.php' method='POST'>
                    <table>
                        <tr>
                            <td class='header' colspan=2>Добавить новую запись<br>Введите данные</td>
                        </tr>
                        <tr>
                            <td>Название : </td>
                            <td>
                                <input type='text' name='titleInsert' required>
                            </td>
                        </tr>
                        <tr>
                            <td>Количество : </td>
                            <td>
                                <input type='number' name='amountInsert' min=0 required>
                            </td>
                        </tr>
                        <tr>
                            <td>Цена : </td>
                            <td>
                                <input type='number' name='priceInsert' min=0 required>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type='hidden' name='user_idInsert' value=$user_id>
                    <input type='hidden' name='login' value=$login>
                    <input type='hidden' name='password' value=$password>
                    <button type='submit'>Добавить</button>
                </form>
                <form action='auth.php' method='POST'>
                    <input type='hidden' name='inputLogin' value=$login>
                    <button type='submit'>Сменить пользователя</button>
                </form>
                <form action='1.php' method='POST'>
                    <input type='hidden' name='userIdAuth' value=$user_id>
                    <button type='submit'>Вернуться на главную страницу</button>
                </form>");
            }
        }
        ?>
    </body>
</html>