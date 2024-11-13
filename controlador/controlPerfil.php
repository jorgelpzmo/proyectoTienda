<?php
session_name('usuario');
session_start();
require 'ControlUsuario.php';
$controlUsuario = new ControlUsuario();

$id = $_SESSION['id'];

// Verificar la acción
if (isset($_POST['accion'])) {
    $accion = $_POST['accion'];
    switch ($accion) {
        case 'cambiar_nickname':
            $nuevo_nickname = $_POST['nuevo_nickname'];
            $controlUsuario->actualizarNickname($nuevo_nickname, $id);
            $aviso = "Nickname cambiado correctamente";
            break;
        case 'cambiar_password':
            $nueva_password = $_POST['nueva_password'];
            $controlUsuario->actualizarPassword($nueva_password, $id);
            $aviso = "Password cambiado correctamente";
            break;
        case 'cambiar_telefono':
            $nuevo_telefono = $_POST['nuevo_telefono'];
            $controlUsuario->actualizarTelefono($nuevo_telefono, $id);
            $aviso = "Telefono actualizado correctamente";
            break;
        case 'cambiar_domicilio':
            $nuevo_domicilio = $_POST['nuevo_domicilio'];
            $controlUsuario->actualizarDomicilio($nuevo_domicilio, $id);
            $aviso = "Domicilio actualizado correctamente";
            break;
    }
    header("Location: ../vista/usuario.php?aviso=$aviso");
    exit;
}
?>

