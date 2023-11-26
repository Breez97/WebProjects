<html>
    <head>
        <title>Вставка данных в бд</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <?php
        $title = NULL;
        $amount = NULL;
        $price = NULL;
        $user_id = NULL;
        if(isset($_POST['titleInsert']) && isset($_POST['amountInsert']) && isset($_POST['priceInsert']) && isset($_POST['user_idInsert']))
        {
            $title = $_POST['titleInsert'];
            $amount = $_POST['amountInsert'];
            $price = $_POST['priceInsert'];
            $user_id = $_POST['user_idInsert'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $descr = mysqli_connect("localhost", "root", "");
            mysqli_select_db($descr, "products");
            mysqli_set_charset($descr, "utf8");
            $checkTable = mysqli_query($descr, "SELECT * FROM products_table WHERE title='$title'");
            $checkFind = 0;
            while($array = mysqli_fetch_array($checkTable))
            {
                $checkFind++;
            }
            if($checkFind == 0)
            {
                $result = mysqli_query($descr, "INSERT INTO products_table(id, title, price, amount, user_id) VALUES (NULL, '$title', $price, $amount, $user_id)");
                if($result)
                {
                    printf("<h3>Данные успешно добавлены</h3>
                    <table>
                        <tr>
                            <td class='header'>Новые данные</td>
                        </tr>
                        <tr>
                            <td>Название : $title<br>Количество : $amount<br>Цена : $price</td>
                        </tr>
                    </table>
                    <br>
                    <form action='1.php' method='POST'>
                        <input type='hidden' name='userIdAuth' value=$user_id>
                        <button type='submit'>Вернуться на главную страницу</button>
                    </form>
                    <form action='insert.php' method='POST'>
                        <input type='hidden' name='login' value=$login>
                        <input type='hidden' name='password' value=$password>
                        <button type='submit'>Вернуться назад</button>
                    </form>");
                }
                else
                {
                    $login = $_POST["login"];
                    $password = $_POST["password"];
                    printf("<h3>Ошибка</h3>
                    <form action='insert.php' method='POST'>
                        <input type='hidden' name='login' value=$login>
                        <input type='hidden' name='password' value=$password>
                        <button type='submit'>Вернуться назад</button>
                    </form>");
                }
            }
            else
            {
                $login = $_POST["login"];
                $password = $_POST["password"];
                printf("<h3>Ошибка, такие данные уже есть</h3>
                <form action='insert.php' method='POST'>
                    <input type='hidden' name='login' value=$login>
                    <input type='hidden' name='password' value=$password>
                    <button type='submit'>Вернуться назад</button>
                </form>");
            }
        }
        ?>
    </body>
</html>