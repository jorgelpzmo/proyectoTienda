<?php 
session_name("sesion_pedido");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../controlador/controladorPedido.php" method="post">
        <label for="id">ID producto</label>
        <input type="text" name="id">
        <label for="cantidad">Cantidad</label>
        <input type="text" name="cantidad">
        <button type="submit" name="action" value="+">+</button>
    </form>
    <form action="../controlador/controladorPedido.php" method="post">
        <button type="submit" name="action" value="confirmar">Realizar pedido</button>
    </form>
</body>
</html>