<?php

require '../controlador/ControlUsuario.php';

session_name('usuario');
session_start();

$aviso = "";

if (isset($_REQUEST['aviso'])) {
    $aviso = $_REQUEST['aviso'];
}

print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Usuario</title>
    <link href="css/usuario.css" rel="stylesheet">
</head>
<body>

<h2 style="text-align: center;">Gestión de Usuario</h2>

<table>
    <tr>
        <th>Acción</th>
        <th>Descripción</th>
        <th>Modificar</th>
    </tr>
    <tr>
        <td>Cambiar Nickname</td>
        <td>Modifica tu nombre de usuario</td>
        <td><a href="vistaPerfilSetNickname.php" class="action-btn">Cambiar Nickname</a></td>
    </tr>
    <tr>
        <td>Cambiar Contraseña</td>
        <td>Actualiza tu contraseña</td>
        <td><a href="vistaPerfilSetPassword.php" class="action-btn">Cambiar Contraseña</a></td>
    </tr>
    <tr>
        <td>Cambiar Teléfono</td>
        <td>¿Cambiaste de número de teléfono?, actualiza tu número de teléfono</td>
        <td><a href="vistaPerfilSetTelefono.php" class="action-btn">Cambiar Teléfono</a></td>
    </tr>
    <tr>
        <td>Cambiar Domicilio</td>
        <td>¿Cambiaste de residencia?, modifica tu dirección para envíos precisos</td>
        <td><a href="vistaPerfilSetDomicilio.php" class="action-btn">Cambiar Domicilio</a></td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center;">
            <a href="logout.php" class="action-btn logout-btn">Cerrar Sesión</a>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="text-align: center;">
            <p>Confirmación de altualización: <?= $aviso ?></p>   <!--Lanzar un aviso-->
        </td>
    </tr>
</table>

</body>
</html>
