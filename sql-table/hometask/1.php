<html>
    <head>
        <title>SQL таблица</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <?php
            $descr = mysqli_connect("localhost", "root", "");
            mysqli_select_db($descr, "products");
            mysqli_set_charset($descr, "utf8");
            $userID = NULL;
            $userFilter = NULL;
            if(isset($_POST['userIdAuth']) || isset($_GET['userIdAuth']))
            {
                if(isset($_POST['userIdAuth'])) $userID = $_POST['userIdAuth'];
                if(isset($_GET['userIdAuth'])) $userID = $_GET['userIdAuth'];
                $userFilter = " user_id = $userID";
                $findUser = mysqli_query($descr, "SELECT * FROM users WHERE user_id=$userID");
                while($array = mysqli_fetch_array($findUser)) $name = $array['name'];
                printf("<h3>Выполнен вход: $name</h3>");
            }
            else
            {
                printf("
                <form action='auth.php' method='POST'><br>
                    <button type='submit'>Авторизация пользователя</button>
                </form>");
            }
        ?>
        <table width=1000>
            <tr>
                <td class="header">Номер товара</td>
                <td class="header">Название <a href="1.php?sort=AZ">(А-Я)</a> <a href="1.php?sort=ZA">(Я-А)</a></td>
                <td class="header"><a href="1.php?sort=down">(↓)</a> Количество <a href="1.php?sort=up">(↑)</a></td>
                <td class="header">Цена</td>
                <td class="header">ID пользователя</td>
            </tr>

            <?php
                $sortLine = NULL;
                $sortPriceLine = NULL;

                if(isset($_POST["startPrice"]) && isset($_POST["endPrice"])) 
                {
                    $startPrice = $_POST["startPrice"];
                    $endPrice = $_POST["endPrice"];
                
                    if(!empty($startPrice) && !empty($endPrice)) 
                    {
                        $sortPriceLine = " price >= $startPrice AND price <= $endPrice";
                    } 
                    elseif (!empty($startPrice)) 
                    {
                        $sortPriceLine = " price >= $startPrice";
                    } 
                    elseif (!empty($endPrice)) 
                    {
                        $sortPriceLine = " price <= $endPrice";
                    }
                }
                
                if($userFilter != NULL || $sortPriceLine != NULL)
                {
                    $sortWhere = NULL;
                    if($userFilter != NULL && $sortPriceLine != NULL) $sortWhere = "WHERE " . $userFilter. " AND" . $sortPriceLine;
                    else
                    {
                        if($userFilter != NULL) $sortWhere = "WHERE " . $userFilter;
                        if($sortPriceLine != NULL) $sortWhere = "WHERE " . $sortPriceLine;
                    }
                }

                if(isset($_GET["sort"])) $sort = $_GET["sort"];
                if($sort == "AZ") $sortLine = "ORDER BY title";
                if($sort == "ZA") $sortLine = "ORDER BY title DESC";
                if($sort == "up") $sortLine = "ORDER BY amount DESC";
                if($sort == 'down') $sortLine = "ORDER BY amount ";

                $result = mysqli_query($descr, "SELECT * FROM products_table $sortWhere $sortLine");

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
                    <?php
                        if($userID == NULL) printf("<form action='1.php' method='POST'>");
                        else printf("<form action='1.php?userIdAuth=$userID' method='POST'>");
                    ?>
                        от: <input type="number" name="startPrice" min=0>
                        <br><br>
                        до: <input type="number" name="endPrice" min=0>
                        <br><br>
                        <button type="submit">Выбрать</button>
                    </form>
                    <form action="1.php" method="POST">
                        <button type="submit">Выйти</button>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>