<?php
$id=$_GET["ID_PRODUCTO"];
$sec=$_GET["SECCION"];
$prod=$_GET["PRODUCTO"];
$org=$_GET["ORIGEN"];
$imp=$_GET["IMPORTADO"];
$prec=$_GET["PRECIO"];

require ("conexion.php");

$conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()){
    echo "LA CONEXION FALLO"; 
    exit (); 
}

mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos");

$consulta= "INSERT INTO productos (ID_PRODUCTO, SECCION, PRODUCTO, ORIGEN, IMPORTADO, PRECIO) 
VALUES ('$id', '$sec', '$prod', '$org', '$imp', '$prec')"; 

$resultado = mysqli_query($conexion, $consulta);

if ($resultado==false) {
    echo "Error de ejecucion";
}else{
    echo "El producto fue almacenado con los siguientes Datos: <br><br>";
    echo "Codigo: "."$id"."<br>";
    echo "Seccion: "."$sec"."<br>";
    echo "Producto: "."$prod"."<br>";
    echo "Pais de Origen: "."$org"."<br>";
    echo "Importado: "."$imp"."<br>";
    echo "Precio: "."$prec"."<br>";
}

    mysqli_close($conexion);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form_registro.php">Vovler</a>
</body>
</html>