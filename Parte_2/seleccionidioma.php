<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diiego</title>
</head>
<body>
    <td align="center"><a href="creacookie.php?idioma=sp"><img src=""
    width="140" height="100"border="5"></a></td>
    <td align="center"><a href="creacookie.php?idioma=en"><img src=""
    width="140" height="100"border="5"></a></td>
</body>
</html>

<?php
if (isset($_COOKIE["sel_idioma"])) {
    
    if($_COOKIE["sel_idioma"]=="sp"){

        header("Location:pag_español.php");
    }else if ($_COOKIE["sel_idioma"]=="en") {
        header("Location:pag_ingles.php");
    }
}
?>