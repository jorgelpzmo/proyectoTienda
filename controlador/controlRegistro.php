<?php

require_once 'ControlUsuario.php';
require_once '../modelo/DTOusuario.php';

// Inicializamos variables de aviso
$avisoNombre = $avisoApellido = $avisoNickname = $avisoContra = $avisoTelefono = $avisoDomicilio = "";
$controlRegistro = new ControlUsuario();
// Validamos los campos del formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $nickname = trim($_POST['nickname']);
    $contra = trim($_POST['contra']);
    $telefono = trim($_POST['telefono']);
    $domicilio = trim($_POST['domicilio']);

    $hayError = false;


    // Validamos si cada campo está vacío
    if (empty($nombre)) {
        $avisoNombre = "El nombre es obligatorio";
        $hayError = true;
    }
    if (empty($apellido)) {
        $avisoApellido = "El apellido es obligatorio";
        $hayError = true;
    }
    if (empty($nickname)) {
        $avisoNickname = "El nickname es obligatorio";
        $hayError = true;
    }
    if (empty($contra)) {
        $avisoContra = "La contraseña es obligatoria";
        $hayError = true;
    }
    if (empty($telefono)) {
        $avisoTelefono = "El teléfono es obligatorio";
        $hayError = true;
    }
    if (empty($domicilio)) {
        $avisoDomicilio = "El domicilio es obligatorio";
        $hayError = true;
    }

    // Si hay algún error, redirigimos de vuelta a registro.php con los mensajes de error
    if ($hayError) {
        header("Location: ../vista/registro.php?avisoNombre=$avisoNombre&avisoApellido=$avisoApellido&avisoNickname=$avisoNickname&avisoContra=$avisoContra&avisoTelefono=$avisoTelefono&avisoDomicilio=$avisoDomicilio");
        exit();
    }

    $hayErrorFormato = false;
    $patronUsuario = "/^\w{3,}$/";
    $patronContra = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";

    if (!preg_match($patronUsuario, $nickname)) {
        $avisoFormatoNickname = "El nickname solo puede contener caracteres alfanumericos con un mínimo de 3";
        $hayErrorFormato = true;
    }

    if (!preg_match($patronContra, $contra)) {
        $avisoFormatoContra = "No es posible establecer esa contraseña."; //Nico doy pistas o no?? En plan, digo que es necesario que hay mínimo una mayúscula, una minúscula y un número o solo digo que nos viable???
        $hayErrorFormato = true;
    }

    if ($hayErrorFormato) {
        header("Location: ../vista/registro.php?avisoFormatoNickname=$avisoFormatoNickname&avisoFormatoContra=$avisoFormatoContra");
        exit();
    }

    $nuevoUsuario = new DTOusuario(" ", $nombre, $apellido, $nickname, $contra, $telefono, $domicilio);

    $controlRegistro->nuevoUsuario($nuevoUsuario);

    echo "Tu usuario se registro correctamente"; //Se podría hacer una página sencilla con estilo que dijese ese mensaje.


} else {
    // Si no es un método POST, redirigimos al formulario de registro
    header("Location: ../vista/registro.php");
    exit();
}
?>

