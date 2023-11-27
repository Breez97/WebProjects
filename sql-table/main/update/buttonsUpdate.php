<?php
    printf("
    <form action='updateWindow.php' method='POST'>
        <input type='hidden' name='product_id' value=$product_id>
        <button type='submit'>Вернуться назад</button>
    </form>
    <form action='../main.php' method='POST'>
        <button type='submit'>Вернуться на главную страницу</button>
    </form>
    ");
?>