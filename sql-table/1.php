<html>
    <head>
        <title>SQL таблица</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <body>
        <form action="auth.php" method="POST"><br>
            <button type="submit">Авторизация пользователя</button>
        </form>
        <table>
            <tr>
                <td class="header">Номер товара</td>
                <td class="header">Название <a href="1.php?sort=AZ">(А-Я)</a> <a href="1.php?sort=ZA">(Я-А)</a></td>
                <td class="header"><a href="1.php?sort=down">(↓)</a> Количество <a href="1.php?sort=up">(↑)</a></td>
                <td class="header">Цена</td>
                <td class="header">ID пользователя</td>
            </tr>

            <?php
                $userID = NULL;
                $sortLine = NULL;
                $sortPriceLine = NULL;

                if(isset($_POST["startPrice"]) && isset($_POST["endPrice"])) 
                {
                    $startPrice = $_POST["startPrice"];
                    $endPrice = $_POST["endPrice"];
                
                    if(!empty($startPrice) && !empty($endPrice)) 
                    {
                        $sortPriceLine = "WHERE price >= $startPrice AND price <= $endPrice";
                    } 
                    elseif (!empty($startPrice)) 
                    {
                        $sortPriceLine = "WHERE price >= $startPrice";
                    } 
                    elseif (!empty($endPrice)) 
                    {
                        $sortPriceLine = "WHERE price <= $endPrice";
                    }
                }

                if(isset($_GET["sort"])) $sort = $_GET["sort"];
                if($sort == "AZ") $sort_line = "ORDER BY title";
                if($sort == "ZA") $sort_line = "ORDER BY title DESC";
                if($sort == "up") $sort_line = "ORDER BY amount DESC";
                if($sort == 'down') $sort_line = "ORDER BY amount ";

                $descr = mysqli_connect("localhost", "root", "");
                mysqli_select_db($descr, "products");
                mysqli_set_charset($descr, "utf8");
                $result = mysqli_query($descr, "SELECT * FROM products_table $sortPriceLine $sort_line");

                $number = 1;
                while($array = mysqli_fetch_array($result))
                {
                    printf("<tr>
                    <td>{$number}</td>
                    <td>{$array['title']}</td>
                    <td>{$array['price']}</td>
                    <td>{$array['amount']}</td>
                    <td>{$array['user_id']}</td>
                    </tr>");
                    $number++;
                }
            ?>
            <tr>
                <td colspan=5 align="center">Выбрать товары с количеством
                    <br><br>
                    <form action="1.php" method="POST">
                        от: <input type="number" name="startPrice">
                        <br><br>
                        до: <input type="number" name="endPrice">
                        <br><br>
                        <button type="submit">Выбрать</button>
                    </form>
                    <form action="1.php" method="GET"><br>
                        <button type="submit">Сбросить фильтры</button>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>