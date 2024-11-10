<?php
require_once 'ControlUsuario.php';
/*<form action="../controlador/controlRegistro.php" method="post">

    <label>Introduce tu nombre: </label>
    <input type="text" id="nombre" name="nombre" required>

    <label>Introduce tu apellido: </label>
    <input type="text" id="apellido" name="apellido" required>

    <label>Introduce un nickname: </label>
    <input type="text" id="nickname" name="nickname" required>

    <label>Introduce una contraseña : </label>
    <input type="text" id="contra" name="contra" required>

    <label>Introduce tu telefono: </label>
    <input type="text" id="telefono" name="telefono" required>

    <label>Introduce tu domicilio: </label>
    <input type="text" id="domicilio" name="domicilio" required>

    <input type="submit" value="Enviar">*/

$controlUsuario = new ControlUsuario();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$nickname = $_POST['nickname'];
$password = $_POST['contra'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];


?>

