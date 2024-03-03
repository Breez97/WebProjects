<html>
    <head>
        <title>Table</title>
        <style>
            td
            {
                font-family: Arial;
                text-align: center;
                color: #f0f8ff;
            }
        </style>
    </head>
    <body>
        <table width="200" border="1">
            <?php
            echo "<tr>";
            echo "<td BGCOLOR='#FF9900' colspan='100' >1</td>";
            echo "</tr>";
            for($i = 2; $i < 100; $i += 2)
            {
                $j = 100;
                $k = $i + 1;
                $color = 99 - $i;
                echo "<tr>";
                if($color < 10) echo "<td BGCOLOR = '#000{$color}00' rowspan='{$j}'>{$i}</td>";
                else echo "<td BGCOLOR = '#00{$color}00' rowspan='{$j}'>{$i}</td>";
                if($color < 10) echo "<td BGCOLOR='#FF0{$color}00' colspan='{$j}'>{$k}</td>";
                else echo "<td BGCOLOR='#FF{$color}00' colspan='{$j}'>{$k}</td>";
                echo "</tr>";
                $j -= 1;
            }
            $color--;
            echo "<tr>";
            echo "<td BGCOLOR='#000{$color}00' align=\"center\">100</td>";
            echo "</tr>";
            ?>
        </table>
    </body>
</html>