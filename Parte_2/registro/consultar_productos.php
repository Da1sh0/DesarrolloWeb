<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Diiego</title>
</head>
<body>
    <?php
    require("conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){
    echo "La conexion ta mala";
    exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos =D");
    
    echo "<table>";
    echo "<tr><th> ID PRODUCTO </th>";
    echo "<th> SECCION </th>";
    echo "<th> PRODUCTO </th>";
    echo "<th> ORIGEN </th>";
    echo "<th> IMPORTADO </th>";
    echo "<th> PRECIO </th></tr>";
    
    $resultado = mysqli_query($conexion, "SELECT * FROM productos");
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<tr>"; 
        echo "<td>".$fila['ID_PRODUCTO']."</td>";
        echo "<td>".$fila['SECCION']."</td>";
        echo "<td>".$fila['PRODUCTO']."</td>";
        echo "<td>".$fila['ORIGEN']."</td>";
        echo "<td>".$fila['IMPORTADO']."</td>";
        echo "<td>".$fila['PRECIO']."</td>";
        echo "</tr>";
    }
    echo "</table>";
    mysqli_close($conexion);
        ?>
</body>
</html>