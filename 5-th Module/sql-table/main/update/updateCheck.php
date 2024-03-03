<html>
    <head>
        <title>Проверка обновления</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <?php
            $product_id = NULL;
            $title = NULL;
            $amount = NULL;
            $price = NULL;
            if(isset($_POST['product_id']) && isset($_POST['title']) && isset($_POST['amount']) && isset($_POST['price']))
            {
                $product_id = $_POST['product_id'];
                $title = $_POST['title'];
                $amount = $_POST['amount'];
                $price = $_POST['price'];

                include "../dbConnection.php";

                $check = mysqli_query($descr, "SELECT * FROM products_table WHERE title='$title' AND price=$price AND amount=$amount");
                $checkAmount = 0;
                while($array = mysqli_fetch_array($check))
                {
                    $checkAmount++;
                }

                if($checkAmount == 0)
                {
                    $result = mysqli_query($descr, "UPDATE products_table SET title='$title', price=$price, amount=$amount WHERE id=$product_id");
                    if($result)
                    {
                        printf("<h3>Данные успешно обновлены</h3>");
                        include "buttonsUpdate.php";
                    }
                    else
                    {
                        printf("<h3>Произошла ошибка обновления данных<br>Попробуйте снова</h3>");
                        include "buttonsUpdate.php";
                    }
                }
                else
                {
                    printf("<h3>Такие данные уже есть<br>Попробуйте снова</h3>");
                    include "buttonsUpdate.php";
                }
            }
            
        ?>
    </body>
</html>