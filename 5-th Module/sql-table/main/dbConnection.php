<?php
    $descr = mysqli_connect("localhost", "root", "");
    mysqli_select_db($descr, "products");
    mysqli_set_charset($descr, "utf8");
?>