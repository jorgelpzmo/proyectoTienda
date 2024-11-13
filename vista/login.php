<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Inicio de Sesión</h1>
<?php
// LO MISMO, NO HAY QUE INICIALIZAR
    /*$avisoNickname = "";*/
    $aviso = "";
    /*if (isset($_REQUEST['avisoNickname'])) {
        $avisoNickname = $_REQUEST['avisoNickname'];
    }*/
    if (isset($_REQUEST['aviso'])) {
        $aviso = $_REQUEST['aviso'];
    }
?>
<form action="../controlador/controlLogin.php" method="post"> <!--Revisar el form action porque no es ese archivo.-->
    <label>Introduce tu usuario:</label>
    <input type="text" id="loginUsuario" name="loginUsuario" required><br> <!--Con el required obligas
     a que ese campo sea rellenado para poder
     enviar el formulario, AQUI DEBERIAS HACER EL MISMO CONTROL QUE EN EL FORM-->

    <label>Introduce tu contraseña:</label>
    <input type="password" id="loginContra" name="loginContra" required><br>

    <input type="submit" value="Iniciar sesión">
</form>
<!--<button type="button" onclick="location.href='registro.html'">Registrarse</button>-->
<p><?= $aviso ?></p>
<p>Si no estás registrado pincha <a href="registro.php">aqui</a></p>
</body>
</html>