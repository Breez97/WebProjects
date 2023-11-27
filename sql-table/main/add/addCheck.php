<html>
    <head>
        <title>Проверка добавления</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <?php
            $title = NULL;
            $amount = NULL;
            $pprice = NULL;
            if(isset($_POST['title']) && isset($_POST['amount']) && isset($_POST['price']))
            {
                $title = $_POST['title'];
                $amount = $_POST['amount'];
                $price = $_POST['price'];
                
                include "../dbConnection.php";

                $checkAmount = 0;
                $check = mysqli_query($descr, "SELECT * FROM products_table WHERE title='$title' AND amount=$amount AND price=$price");
                while($array = mysqli_fetch_array($check))
                {
                    $checkAmount++;
                }
                if($checkAmount == 0)
                {
                    $result = mysqli_query($descr, "INSERT INTO products_table(id, title, price, amount, user_id) VALUES (NULL, '$title', $price, $amount, 2)");

                    if($result)
                    {
                        printf("
                            <h3>Данные успешно добавлены</h3>
                            <table>
                                <tr>
                                    <td class='header'>Новые данные</td>
                                </tr>
                                <tr>
                                    <td>Название : $title<br>Количество : $amount<br>Цена : $price</td>
                                </tr>
                            </table>
                            <br>
                            <form action='addMain.php'>
                                <button type='submit'>Вернуться назад</button>
                            </form>
                        ");
                    }
                    else
                    {
                        printf("
                            <h3>Ошибка добавления записи попробуйте снова</h3>
                        ");
                        include "buttonsAdd.php";
                    }
                    printf("
                        <form action='../main.php' method='POST'><button type='submit'>Вернуться на главную страницу</button></form>
                    ");
                }
                else
                {
                    printf("
                    <h3>Такие данные уже есть</h3>
                    ");
                    include "buttonsAdd.php";
                }
                
            }
            else
            {
                printf("
                <h3>Ошибка добавления записи попробуйте снова</h3>
                ");
                include "buttonsAdd.php";
            }
        ?>
    </body>
</html>