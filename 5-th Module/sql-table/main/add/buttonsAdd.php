<?php
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
    printf("
        <form action='addMain.php' method='POST'>
            <input type='hidden' name='title' value='$title'>
            <input type='hidden' name='amount' value='$amount'>
            <input type='hidden' name='price' value='$price'>
            <button type='submit'>Попробовать снова</button>
        </form>
    ");
    printf("
        <form action='../main.php' method='POST'>
            <button type='submit'>Вернуться на главную страницу</button>
        </form>
    ");
?>
