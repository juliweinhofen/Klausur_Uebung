<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>

<body>

<table border="1px solid grey">


    <?php

    switch($_POST["a"]) {

        case ($_POST["a"]<0);
            echo "Die Zahl " . $_POST["a"] . " ist kleiner als Null";
            break;
        case ($_POST["a"] == 0);
            echo "Die Zahl " . $_POST["a"] . " ist gleich Null";
            break;
        case ($_POST["a"]>0&&$_POST["a"] <= 10);
            echo "Die Zahl " . $_POST["a"] . " ist größer als Null und kleiner oder gleich 10";
            break;
        case ($_POST["a"]>10);
            echo "Die Zahl " . $_POST["a"] . " ist größer als 10";
            break;
    }
    ?>


</table>


</body>


</html>

