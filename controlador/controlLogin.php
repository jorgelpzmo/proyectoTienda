<?php

require_once 'ControlUsuario.php';

session_name('usuario');
session_start();

$loginUsuario = $_POST['loginUsuario'];
$passwordUsuario = $_POST['loginContra'];
$controlUsuario = new ControlUsuario();
$usuario = $controlUsuario->comprobarUsuario($loginUsuario, $passwordUsuario);

if ($controlUsuario->comprobarNickname($loginUsuario)) {
    if ($controlUsuario->comprobarPassword($passwordUsuario)) {
        if ($usuario) {
            $_SESSION['id'] = $usuario->getId();
            $_SESSION['nombre'] = $usuario->getNombre();
            $_SESSION['apellido'] = $usuario->getApellido();
            $_SESSION['nickname'] = $usuario->getNickname();
            $_SESSION['password'] = $usuario->getPassword();
            $_SESSION['telefono'] = $usuario->getTelefono();
            $_SESSION['domicilio'] = $usuario->getDomicilio();

            header("location:../vista/index.php");
            //unset($_SESSION['nickname'], $_SESSION['password'], $_SESSION['id']); Simplemente Ejemplo para Hacer en la pagina del botón cerrar sesión.
            exit;
        }
    } else {
        $aviso = "La contraseña introducida es incorrecta";
        header("location: ../vista/login.php?aviso=$aviso");
        exit;
    }
} else {
    $aviso = "El nombre de usuario introducido no está registrado";
    header("location: ../vista/login.php?aviso=$aviso");
    exit;
}
?>
