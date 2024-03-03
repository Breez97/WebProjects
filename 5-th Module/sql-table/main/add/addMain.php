<html>
    <head>
        <title>Добавление записи</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <?php
            $title = NULL;
            $amount = NULL;
            $price = NULL;
            if(isset($_POST['title']))
            {
                $title = $_POST['title'];
            }
            if(isset($_POST['amount']))
            {
                $amount = $_POST['amount'];
            }
            if(isset($_POST['price']))
            {
                $price = $_POST['price'];
            }
        ?>
        <form action='addCheck.php' method='POST'>
            <table>
                <tr>
                    <td colspan=2 class='header'>Добавление нового товара</td>
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
                                <input type='number' name='amount' value='$amount' required min=0>
                            ");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Цена : </td>
                    <td>
                        <?php
                            printf("
                                <input type='number' name='price' value='$price' required min=0>
                            ");
                        ?>
                    </td>
                </tr>
            </table>
            <br>
            <button type='submit'>Добавить</button>
        </form>
        <form action='../main.php'>
            <button type='submit'>Вернуться назад</button>
        </form>
    </body>
</html>