<html>
    <head>
        <title>Обновление данных</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <?php
            $product_id = NULL;
            if(isset($_POST['product_id'])) $product_id = $_POST['product_id'];
            if(isset($_GET['product_id'])) $product_id = $_GET['product_id'];
            include "../dbConnection.php";
            $result = mysqli_query($descr, "SELECT * FROM products_table WHERE id=$product_id");
            while($array = mysqli_fetch_array($result))
            {
                $title = $array['title'];
                $amount = $array['amount'];
                $price = $array['price'];
            }
        ?>
        <form action='updateCheck.php' method='POST'>
            <table>
                <tr>
                    <td colspan=2 class='header'>Обновление данных</td>
                </tr>
                <tr>
                    <td>Название : </td>
                    <td>
                        <?php
                            printf("
                                <input type='text' name='title' value='$title' required>
                            ");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Количество : </td>
                    <td>
                        <?php
                            printf("
                                <input type='number' name='amount' value='$amount' min=0 required>
                            ");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Цена : </td>
                    <td>
                        <?php
                            printf("
                                <input type='text' name='price' value='$price' min=0 required>
                            ");
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <?php
                printf("
                    <input type='hidden' name='product_id' value=$product_id>
                ");
            ?>
            <button type='submit'>Обновить данные</button>
        </form>
        <form action='updateMain.php' method='POST'>
            <button type='sumbit'>Вернуться назад</button>
        </form>
        <form action='../main.php' method='POST'>
            <button type='sumbit'>Вернуться на главную страницу</button>
        </form>
    </body>
</html>