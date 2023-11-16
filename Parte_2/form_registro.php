<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_registro.css">
    <title>Diiego</title>
</head>
<body>
    <h1 class="titulo">Gestion Productos</h1>
    <div class="main-content">
        <form class="form-reg" method="get" action="insertar_productos.php">
            <div class="form-tittle-row">
                <h1>Agregar productos</h1>
            </div>

            <div class="form-row">
                <label>Codigo Producto</label>
                <input type="text" name="ID_PRODUCTO" id="ID_PRODUCTO">
            </div>

            <div class="form-row">
                <label>Seccion</label>
                <input type="text" name="SECCION" id="SECCION">
            </div>

            <div class="form-row">
                <label>Nombre Producto</label>
                <input type="text" name="PRODUCTO" id="PRODUCTO">
            </div>

            <div class="form-row">
                <label>Origen</label>
                <input type="text" name="ORIGEN" id="ORIGEN">
            </div>

            <div class="form-row">
                <label>Importado</label>
                <select name="IMPORTADO" id="IMPORTADO">
                    <option>VERDADERO</option>
                    <option>FALSO</option>
                </select>
            </div>

            <div class="form-row">
                <label>Precio</label>
                <input type="text" name="PRECIO" id="PRECIO">
            </div>
            <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="Enviar">
                <input type="reset" name="borrar" id="borrar" value="Limpiar Formulario">
            </div>
        </form>
    </div>
</body>
</html>