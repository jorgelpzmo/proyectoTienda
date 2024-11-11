<?php

require_once 'ControlUsuario.php';

session_name('usuario');
session_start();

$loginUsuario = $_POST['loginUsuario'];
$passwordUsuario = $_POST['loginContra'];
$controlUsuario = new ControlUsuario();

$usuario = $controlUsuario->comprobarUsuario($loginUsuario, $passwordUsuario);

if ($usuario) {
    $_SESSION['nickname'] = $usuario->getNickname();
    $_SESSION['password'];
    $_SESSION['id'];
    header("location:../vista/index.php");
    exit;
} else {
    $aviso = "ERROR: no existe el usuario";
    header("location: ../vista/login.html?aviso=$aviso"); //Preguntar a Nico si está bien.
    exit;
}
?>
