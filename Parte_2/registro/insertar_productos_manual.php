<?php
require("conexion.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
   echo "La conexion ta mala";
   exit();
}

mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos =D");

$consulta = "INSERT INTO productos (ID_PRODUCTO, SECCION, PRODUCTO, ORIGEN, IMPORTADO, PRECIO) 
VALUES('AR43','JUGUETERÍA','Castillo','Japon','VERDADERO',45000)";

$resultado = mysqli_query($conexion, $consulta);

mysqli_close($conexion);
?>
