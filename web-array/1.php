<?php include 'array.php'?>

<html>
    <head>
        <title>Семейная мода</title>
        <link rel="stylesheet" type="text/css" href="./style.css">
    </head>
    <body>
        <ul>
            <li class="topText"><a class="main" href="#">Семейная мода</a></li>
            <li class="topText"><a href="#">О нас</a></li>
            <li class="topText"><a href="#">Магазины</a></li>
            <li class="topText"><a href="add.php">Добавить товар</a></li>
        </ul>
        <?php
            foreach ($products as $category => $subCategories)
            {
                echo "<table width='100%' align=center>";
                echo "<tr>";
                echo "<h2>$category</h2>";
                echo "</tr>";
                echo "<tr>";
                foreach ($subCategories as $subCategory => $items)
                {
                    echo "<td width='500px'>";
                    echo "<h3>$subCategory</h3>";
                    foreach ($items as $item => $info)
                    {
                        echo "<table class='items' align=center>";
                        echo "<tr>";
                        echo "<td rowspan='3'><img src='{$info['Image']}' width='120' height='120'></td>";
                        echo "<td class='tdText'><b>Название:</b> $item</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td class='tdText'><b>Цена:</b> {$info['Price']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td class='tdText'><b>Описание:</b> {$info['Description']}</td>";
                        echo "</tr>";
                        echo "</table>";
                    }
                    echo "</td>";
                }
                echo "</tr>";
                echo "</table>";
            }
        ?>
    </body>
</html>
