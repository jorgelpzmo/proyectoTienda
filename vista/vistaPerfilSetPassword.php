<?php
$aviso = "";

if (isset($_REQUEST['aviso'])) {
    $aviso = $_REQUEST['aviso'];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Contraseña</title>
    <link href="css/usuario.css" rel="stylesheet">
</head>
<body>

<h2>Cambiar Contraseña</h2>

<table>
    <tr>
        <td>
            <form action="../controlador/controlPerfil.php" method="POST">
                <label for="nueva_password">Nueva Contraseña:</label>
                <input type="password" id="nueva_password" name="nueva_password">
                <br><br>
                <p><?= $aviso ?></p>
                <button type="submit" name="accion" value="cambiar_password" class="action-btn">Guardar Cambios</button>
            </form>
        </td>
    </tr>
</table>

<a href="usuario.php" class="action-btn">Volver a Gestión de Usuario</a>

</body>
</html>

