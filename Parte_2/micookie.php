<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diiego</title>
</head>
<body>
    <?php
    if (isset($_COOKIE["micookie"])) {
        echo $_COOKIE["micookie"]."<br>";
    }else {
        echo "Usted no ha creado naa de cookies";
    }
    ?>
</body>
</html>