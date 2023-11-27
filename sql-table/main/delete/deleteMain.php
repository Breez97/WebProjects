<html>
    <head>
        <title>Удаление товаров</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <form action='deleteCheck.php' method='POST'>
            <table width=1000>
                <tr>
                    <td class="header">ID</td>
                    <td class="header">Номер</td>
                    <td class="header">Название</td>
                    <td class="header">Количество</td>
                    <td class="header">Цена</td>
                </tr>
                <?php
                    include "../dbConnection.php";
                    $result = mysqli_query($descr, "SELECT * FROM products_table");
                    $number = 1;
                    while($array = mysqli_fetch_array($result))
                    {
                        printf("
                        <tr>
                            <td><input type='checkbox' name='ids[]' value={$array['id']}>{$array['id']}</td>
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
            <button type='submit'>Удалить</button>
        </form>
        <form action='../main.php'>
            <button type='submit'>Вернуться на главную страницу</button>
        </form>
    </body>
</html>