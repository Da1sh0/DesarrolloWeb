<?php

$db_host="localhost";
$db_nombre="usuario";
$db_usuario="root";
$db_contra="";

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);


if(mysqli_connect_errno()){
    echo "La conexion ta mala";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos =D");

//$consulta = "SELECT *FROM datospersonales";
//$resultado = mysqli_query($conexion, $consulta);
//while ($fila = mysqli_fetch_row($resultado)) {
//    echo $fila[0]." ";
//    echo $fila[1]." ";
//    echo $fila[2]." ";
//    echo $fila[3]." ";
//    echo "<br>";
//}
//echo "<br>";
//mysqli_close($conexion);
?>