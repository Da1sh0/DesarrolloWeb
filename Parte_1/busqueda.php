<?php
$mibusqueda = isset($_GET["buscar"]) ? $_GET["buscar"] : null;
$mipagina=$_SERVER["PHP_SELF"]; 
function ejecutar_consulta($laconsulta){
   include("conexion.php");
   $consulta= mysqli_query($conexion,"SELECT * FROM productos WHERE PRODUCTO LIKE '%$laconsulta%'");
  ?> 
         <!DOCTYPE html>
         <html lang="en">
         <head>
         <section>Datos que encontrados</section>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="estilos.css?ver=1.2">
            <title>Diiego</title>
         </head>
         <body>
         <?php
         echo "<table> ";
               echo "<tr><th>ID_PRODUCTO</th>";
               echo "<th>SECCION</th>";
               echo "<th>PRODUCTO</th>";
               echo "<th>ORIGEN</th>";
               echo "<th>IMPORTADO</th>";
               echo "<th>PRECIO</th></tr>";

            while ($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
               echo "<tr>";
               echo "<td>".$fila['ID_PRODUCTO']."</td>";
               echo "<td>".$fila['SECCION']."</td>";
               echo "<td>".$fila['PRODUCTO']."</td>";
               echo "<td>".$fila['ORIGEN']."</td>";
               echo "<td>".$fila['IMPORTADO']."</td>";
               echo "<td>".$fila['PRECIO']."</td>";
               echo "</tr>";
               ?>
         </body>
         </html>
            <?php
}
}

if($mibusqueda!=NULL){
   ejecutar_consulta($mibusqueda);
}else 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos.css?ver=1.1">
   <title>Diiego</title>
</head>
<body>
   <section>Busqueda por nombre producto</section>

<form class="form-search" method='get' action="<?php echo $mipagina; ?>">
   <label>Buscar:<input type='text' name= 'buscar'></label>
   <input type='submit' name='search' value='Enviar'>
   </form>
</body>
</html>

<?php 
}
?>
