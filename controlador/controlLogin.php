<?php

require_once 'ControlUsuario.php';


$loginUsuario = $_POST['loginUsuario'];
$passwordUsuario = $_POST['loginContra'];
$controlUsuario = new ControlUsuario();

$numero_registros = $controlUsuario->comprobarUsuario($loginUsuario, $passwordUsuario);

if ($numero_registros > 0) {
    header("location:../vista/index.php");
} else {
    header("location: ../vista/login.html"); //Preguntar a Nico si está bien.
}
?>
