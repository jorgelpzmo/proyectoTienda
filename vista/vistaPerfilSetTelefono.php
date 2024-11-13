<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cambiar Teléfono</title>
    <link href="css/usuario.css" rel="stylesheet">
</head>
<body>

<h2>Cambiar Teléfono</h2>

<table>
    <tr>
        <td>
            <form action="../controlador/controlPerfil.php" method="POST">
                <label for="nuevo_telefono">Nuevo Teléfono:</label>
                <input type="tel" id="nuevo_telefono" name="nuevo_telefono" pattern="\d{9}" title="El teléfono debe tener 9 dígitos" required>
                <br><br>
                <button type="submit" name="accion" value="cambiar_telefono" class="action-btn">Guardar Cambios</button>
            </form>
        </td>
    </tr>
</table>

<a href="usuario.php" class="action-btn">Volver a Gestión de Usuario</a>

</body>
</html>

