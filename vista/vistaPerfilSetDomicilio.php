<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Domicilio</title>
    <link href="css/usuario.css" rel="stylesheet">
</head>
<body>

<h2>Cambiar Domicilio</h2>

<table>
    <tr>
        <td>
            <form action="../controlador/controlPerfil.php" method="POST">
                <label for="nuevo_domicilio">Nuevo Domicilio:</label>
                <input type="text" id="nuevo_domicilio" name="nuevo_domicilio" required minlength="5" maxlength="100">
                <br><br>
                <button type="submit" name="accion" value="cambiar_domicilio" class="action-btn">Guardar Cambios</button>
            </form>
        </td>
    </tr>
</table>

<a href="usuario.php" class="action-btn">Volver a Gestión de Usuario</a>

</body>
</html>

