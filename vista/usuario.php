<?php

require '../controlador/ControlUsuario.php';

session_name('usuario');
session_start();

print_r($_SESSION);
?>
