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
            while($array = mysqli_fetch_array($result))
            {
                $user_id = $array['user_id'];
            }
            if($user_id != NULL)
            {
                echo "<h1>Такой пользователь есть</h1>";
            }
            else
            {
                echo "<h1>Такого пользователя нет</h1>";
            }
        }
        ?>
    </body>
</html>