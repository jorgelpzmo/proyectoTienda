
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controlador/controlAnadirTrastienda.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion">
        <label for="precio">Precio</label>
        <input type="text" name="precio">
        <label for="imagen">Imagen</label>
        <input type="text" name="imagen">
        <label for="stock">Stock</label>
        <input type="stock" name="stock">
        <button type="submit" name="action" value="guardar" id="boton">Añadir producto</button>
    </form>
</body>
</html>