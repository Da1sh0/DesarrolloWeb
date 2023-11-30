<!DOCTYPE html>
<html lang="es">

<?php

if (isset($_POST["enviar"])){
    try {
        $base = new PDO("mysql:host=localhost; dbname=usuario", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM datos_usuario WHERE usuario = :login AND PASSWORD = :password";
        $resultado = $base->prepare($sql);
        $login = htmlentities(addslashes($_POST["usuario"]));
        $password = htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":login", $login);
        //$password=password_hash ($password-›getClave(), PASSWORD_DEFAULT);
        $resultado->bindValue(":password", $password);
        $resultado->execute();
        $numero_registro = $resultado->rowCount();

        if ($numero_registro != 0) {
            session_start();
            $_SESSION["usuario"] = $_POST["usuario"];
            header("location:pagina_inicio.php");
        } else {
            //header("location:form_acceso.php");
            echo "LOS DATOS DE USUARIO SON INCORRECTOS";
        }
    } catch (Exception $e) {
        die("Error: " . $e->getMessage());
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/acceso.css">
    <title>Diiego</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

        <label for="usuario">Usuario:</label>
        <input type="email" id="usuario" name="usuario" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <input type="checkbox" name="recordar">
        <label>Recordarme en este equipo</label><br><br>

        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</body>
</html>
