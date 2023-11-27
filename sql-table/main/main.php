<html>
    <head>
        <title>Основная страница</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <table width=1000>
            <tr>
                <td class="header">ID</td>
                <td class="header">Номер</td>
                <td class="header">Название</td>
                <td class="header">Количество</td>
                <td class="header">Цена</td>
            </tr>
            <?php
                include "dbConnection.php";
                $result = mysqli_query($descr, "SELECT * FROM products_table");
                $number = 1;
                while($array = mysqli_fetch_array($result))
                {
                    printf("
                    <tr>
                        <td>{$array['id']}</td>
                        <td>{$number}</td>
                        <td>{$array['title']}</td>
                        <td>{$array['amount']}</td>
                        <td>{$array['price']}</td>
                    </tr>
                    ");
                    $number++;
                }
            ?>
        </table>
        <br>
        <table width=600 class='buttons' border=0>
            <tr>
                <td align=center class='noBorder'>
                    <form action='add/addMain.php' method='POST'>
                        <button type='sumbit'>Добавить</button>
                    </form>
                </td>
                <td align=center class='noBorder'>
                    <form action='update/updateMain.php' method='POST'>
                        <button type='sumbit'>Изменить</button>
                    </form>
                </td>
                <td align=center class='noBorder'>
                    <form action='delete/deleteMain.php' method='POST'>
                        <button type='sumbit'>Удалить</button>
                    </form>
                </td>
            </tr>
        </table>
    </body>
</html>