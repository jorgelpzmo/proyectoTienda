<?php

// Inicializamos variables de aviso
$avisoNombre = $avisoApellido = $avisoNickname = $avisoContra = $avisoTelefono = $avisoDomicilio = "";

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

    // Aquí puedes continuar con el registro si todos los campos son válidos
    echo "Registro exitoso";
} else {
    // Si no es un método POST, redirigimos al formulario de registro
    header("Location: ../vista/registro.php");
    exit();
}
?>

