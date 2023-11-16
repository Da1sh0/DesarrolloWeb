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

mysqli_close($conexion);
?>