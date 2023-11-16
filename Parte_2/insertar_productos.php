<?php
$id=$_GET["ID_PRODUCTO"];
$sec=$_GET["SECCION"];
$prod=$_GET["PRODUCTO"];
$org=$_GET["ORIGEN"];
$imp=$_GET["IMPORTADO"];
$prec=$_GET["PRECIO"];

require ("conexion.php");

$conexion= mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if (mysqli_connect_errno()){
    echo "LA CONEXION FALLO"; 
    exit (); 
}

mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos");

$consulta= "INSERT INTO productos (ID_PRODUCTO, SECCION, PRODUCTO, ORIGEN, IMPORTADO, PRECIO) 
VALUES ('$id', '$sec', '$prod', '$org', '$imp', '$prec')"; 

mysqli_close($conexion);

?>