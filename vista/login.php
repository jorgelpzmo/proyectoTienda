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
    $aviso = "";

    if (isset($_REQUEST['aviso'])) {
        $aviso = $_REQUEST['aviso'];
    }
?>
<form action="../controlador/controlLogin.php" method="post">
    <label>Introduce tu usuario:</label>
    <input type="text" id="loginUsuario" name="loginUsuario" required><br>

    <label>Introduce tu contraseña:</label>
    <input type="password" id="loginContra" name="loginContra" required><br>

    <input type="submit" value="Iniciar sesión">
</form>
<!--<button type="button" onclick="location.href='registro.html'">Registrarse</button>-->
<p><?= $aviso ?></p>
<p>Si no estás registrado, pincha <a href="registro.php">aquí</a></p>
</body>
</html>
<!--Puedo meterle la opcion de que cambie la contraseña en el caso de que se le halla olvidado pero eso si queréis lo hablamos-->