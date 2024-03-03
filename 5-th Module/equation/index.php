<?php
    function resultString($A, $B, $C)
    {
        $equation = "";
        if($A == 1) $equation .= "x ^ 2 ";
        else if ($A == - 1) $equation .= "-x ^ 2 ";
        else 
        {
            if($A > 0) $equation .= "$A * x ^ 2 ";
            else
            {
                $A = abs($A);
                $equation .= "- $A * x ^ 2 ";
            }
        }
        if($B == 1) $equation .= "+ x ";
        else if($B == -1) $equation .= "- x ";
        else
        {
            if($B > 0) $equation .= "+ $B * x ";
            else
            {
                $B = abs($B);
                $equation .= "- $B * x ";
            }
        }
        if($C > 0)
        {
            $equation .= "+ $C ";
        }
        else if($C < 0)
        {
            $C = abs($C);
            $equation .= "- $C ";
        }
        $equation .= "= 0";
        return $equation;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $A = $_POST["A"];
        $B = $_POST["B"];
        $C = $_POST["C"];
        if(is_null($A) and is_null($B) and is_null($C))
        {
            $equation = "Ошибка";
            $answer = "Ошибка";
        }
        else
        {
            if(is_numeric($A) and is_numeric($B) and is_numeric($C))
        {
            if($A != 0 and $B != 0)
            {
                $discriminant = ($B ** 2) - (4 * $A * $C);
                if($discriminant > 0)
                {
                    $X1 = round((-$B + sqrt($discriminant)) / (2 * $A), 2);
                    $X2 = round((-$B - sqrt($discriminant)) / (2 * $A), 2);
                    $answer = "Два корня : X1 = $X1, X2 = $X2";
                }
                else if($discriminant == 0)
                {
                    $X = round((-$B) / (2 * $A), 2);
                    $answer = "Один корень : X = $X";
                }
                else $answer = "Нет корней";

                $equation = resultString($A, $B, $C);
                }
                if($A == 0)
                {
                    $equation = "Это не квадратное уравнение";
                    $answer = "Не квадратное уравнение";
                }
                if($A == 0 and $B == 0)
                {
                    if($C == 0)
                    {
                        $equation = "Это тождественное уравнение 0 = 0";
                        $answer = "Не квадратное уравнение";
                    }
                    else
                    {
                        $equation = "Ошибка";
                        $answer = "Не квадратное уравнение";
                    }
                }
            }
        }
    }
    else 
    {
        $equation = "";
    }
?>

<html>
    <head>
        <title>Квадратное уравнение</title>
        <link rel="stylesheet" type="text/css" href="equationStyle.css">
    </head>
    <body>
        <h2 align="center">
            Решения квадратных уравнений
        </h2>
        <form action="index.php" method="POST">
            <table align="center">
                <tr>
                    <td colspan="2">
                        <div class="mainText">Квадратное уравнение имеет вид : <b>A * x^2 + B * x + C = 0</b></div>
                    </td>
                </tr>
                <tr>
                    <td><div class="mainText">Введите первый коэффициент (A) :</div></td>
                    <td><input type="text" name="A" maxlength="20"></td>
                </tr>
                <tr>
                    <td><div class="mainText">Введите второй коэффициент (B) :</td>
                    <td><input type="text" name="B" maxlength="20"></td>
                </tr>
                <tr>
                    <td><div class="mainText">Введите третий коэффициент (C) :</td>
                    <td><input type="text" name="C" maxlength="20"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="buttonCenter">
                            <input type="submit" class="submitText" value="Решить уравнение">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="textAnswer">Ваше квадратное уравнение:</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <div class="textAnswer"><?php echo $equation; ?></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="textAnswer">Решение :</div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                    <div class="textAnswer"><?php echo $answer; ?></div>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>