<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registro</title>
</head>
<body>
<h1>¡Rellena el formulario para registrate!</h1>
<?php
// NO HAY QUE INICIALIZARLAS
$avisoNombre = "";
$avisoApellido = "";
$avisoNickname = "";
$avisoContra = "";
$avisoTelefono = "";
$avisoDomicilio = "";
$avisoFormatoNickname = "";
$avisoFormatoContra = "";

if (isset($_REQUEST['avisoNombre'])) {
    $avisoNombre = $_REQUEST['avisoNombre'];
}
if (isset($_REQUEST['avisoApellido'])) {
    $avisoApellido = $_REQUEST['avisoApellido'];
}
if (isset($_REQUEST['avisoNickname'])) {
    $avisoNickname = $_REQUEST['avisoNickname'];
}
if (isset($_REQUEST['avisoContra'])) {
    $avisoContra = $_REQUEST['avisoContra'];
}
if (isset($_REQUEST['avisoTelefono'])) {
    $avisoTelefono = $_REQUEST['avisoTelefono'];
}
if (isset($_REQUEST['avisoDomicilio'])) {
    $avisoDomicilio = $_REQUEST['avisoDomicilio'];
}
if (isset($_REQUEST['avisoFormatoNickname'])) {
    $avisoFormatoNickname = $_REQUEST['avisoFormatoNickname'];
}
if (isset($_REQUEST['avisoFormatoContra'])) {
    $avisoFormatoContra = $_REQUEST['avisoFormatoContra'];
}

?>
<form action="../controlador/controlRegistro.php" method="post">

  <label>Introduce tu nombre: </label>
  <input type="text" id="nombre" name="nombre"> <!--required-->

  <label>Introduce tu apellido: </label>
  <input type="text" id="apellido" name="apellido"> <!--required-->

  <label>Introduce un nickname: </label>
  <input type="text" id="nickname" name="nickname"> <!--required-->

  <label>Introduce una contraseña : </label>
  <input type="password" id="contra" name="contra"> <!--required-->

  <label>Introduce tu telefono: </label>
  <input type="text" id="telefono" name="telefono"> <!--required -->

  <label>Introduce tu domicilio: </label>
  <input type="text" id="domicilio" name="domicilio"> <!--required-->

  <input type="submit" value="Enviar">

</form>
<p><?= $avisoNombre ?></p>
<p><?= $avisoApellido ?></p>
<p><?= $avisoNickname ?></p> <!--Tengo un aviso que se llama igual en el login.php, no se si dará error, tener en cuente por si algo raro pasa NO PASA NADA SON DOS ARCHIVOS DIFERENTES-->
<p><?= $avisoContra ?></p>
<p><?= $avisoTelefono ?></p>
<p><?= $avisoDomicilio ?></p>
<p><?= $avisoFormatoNickname ?></p>
<p><?= $avisoFormatoContra ?></p>

</body>
</html>