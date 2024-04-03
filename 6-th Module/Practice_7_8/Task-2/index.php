<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Task 2</title>
    </head>
    <body>
        <script src="../../jquery.js"></script>
        <script src="1.js"></script>

        <div class="main-container">
            <select name="choose_district">
                <?php
                    $descr = mysqli_connect("localhost", "root", "root");
                    mysqli_select_db($descr, "locations");
                    mysqli_set_charset($descr, "utf8");
                ?>
            </select>
        </div>
    </body>
</html>