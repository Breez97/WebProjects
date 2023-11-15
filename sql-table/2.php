<html>
    <head>
        <title>Добавление нового значения</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <body>
        <form action="2.php" method="POST">
            <table align=center>
                <tr>
                    <td>Название :</td>
                    <td>
                        <input type="text" name="productTitle" required>
                    </td>
                </tr>
                <tr>
                    <td>Цена :</td>
                    <td>
                        <input type="number" name="productPrice" required>
                    </td>
                </tr>
                <tr>
                    <td>Количество :</td>
                    <td>
                        <input type="number" name="productAmount" required>
                    </td>
                </tr>
                <tr>
                    <td colspan=2 align=center>
                        <button type="submit">Добавить данные</button>
                    </td>
                </tr>
                <tr>
                    <td><input type="hidden" name="userID", value="1"></td>
                </tr>

                <?php
                if(isset($_POST["productTitle"]) && isset($_POST["productPrice"]) && isset($_POST["productAmount"]))
                {
                    $productTitle = $_POST["productTitle"];
                    $productAmount = $_POST["productAmount"];
                    $productPrice = $_POST["productPrice"];
                    $userID = $_POST["userID"];
                }

                $descr = mysqli_connect("localhost", "root", "");
                mysqli_select_db($descr, "products");
                mysqli_set_charset($descr, "utf8");
                mysqli_query($descr, "INSERT INTO products_table VALUES(NULL, $productTitle, $productAmount, $productPrice, $userID)");
                
                ?>

            </table>
        </form>
    </body>
</html>