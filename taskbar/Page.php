<html>
    <head>
        <title>Task-Bar</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
    </head>
    <body>
        <ul>
            <li><a class="main" href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Цена</a></li>
            <li><a href="#">Контакты</a></li>
        </ul>
    </body>
</html>

<?php
    $mas = 
    [
        'title' => 'Главная',
        'url' => '/',
    ];

    $mas_1 = 
    [
        'title' => 'О нас',
        'url' => '/about.php',
    ];
    
    $mas_2 = 
    [
        'title' => 'Цена',
        'url' => '/price.php',
    ];

    $mas_3 = 
    [
        'title' => 'Контакты',
        'url' => '/contacts.php',
    ];

    $mas_block[] = $mas;
    $mas_block[] = $mas_1;
    $mas_block[] = $mas_2;
    $mas_block[] = $mas_3;
?>
