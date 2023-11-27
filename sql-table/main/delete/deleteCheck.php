<html>
    <head>
        <title>Проверка удаления</title>
        <link rel="stylesheet" type="text/css" href="../../css/style.css">
    </head>
    <body>
        <form action='deleteMain.php'>
            <?php
                $checked = $_POST['ids'];
                if($checked == NULL)
                {
                    printf("<h3>Данные для удаления не выбраны</h3>");
                }
                else
                {
                    include "../dbConnection.php";
                    foreach($checked as $id => $value)
                    {
                        $result = mysqli_query($descr, "DELETE FROM products_table WHERE id=$value");
                    }
                    printf("<h3>Данные успешно удалены</h3>");
                }
            ?>
            <button type='submit'>Вернуться назад</button>
        </form>
        <form action='../main.php'>
            <button type='sumbit'>Вернуться на главную страницу</button>
        </form>
    </body>
</html>