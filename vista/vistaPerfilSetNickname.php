<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Nickname</title>
    <link href="css/usuario.css" rel="stylesheet">
</head>
<body>

<h2>Cambiar Nickname</h2>

<table>
    <tr>
        <td>
            <form action="../controlador/controlPerfil.php" method="POST">
                <label for="nuevo_nickname">Nuevo Nickname:</label>
                <input type="text" id="nuevo_nickname" name="nuevo_nickname" required minlength="3" maxlength="20">
                <br><br>
                <button type="submit" name="accion" value="cambiar_nickname" class="action-btn">Guardar Cambios</button>
            </form>
        </td>
    </tr>
</table>

<a href="usuario.php" class="action-btn">Volver a Gestión de Usuario</a>

</body>
</html>
