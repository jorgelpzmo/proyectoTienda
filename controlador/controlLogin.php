<?php

require_once 'ControlUsuario.php';

session_name('usuario');
session_start();

$loginUsuario = $_POST['loginUsuario'];
$passwordUsuario = $_POST['loginContra'];

//print $loginUsuario;
//print $passwordUsuario;
$controlUsuario = new ControlUsuario();
$usuario = $controlUsuario->comprobarUsuario($loginUsuario, $passwordUsuario);
//print "resultado" . $controlUsuario->comprobarNickname($loginUsuario);
if ($controlUsuario->comprobarNickname($loginUsuario)) {
  //  print "resultadoDIFER " . $controlUsuario->comprobarPassword($passwordUsuario);
    //exit;
    if ($controlUsuario->comprobarPassword($passwordUsuario)) {
        if ($usuario) {
            $_SESSION['nickname'] = $usuario->getNickname();
            $_SESSION['password'] = $usuario->getPassword();
            $_SESSION['id'] = $usuario->getId();

            header("location:../vista/index.php");
            //unset($_SESSION['nickname'], $_SESSION['password'], $_SESSION['id']); Simplemente Ejemplo
            exit;
        }
    } else {
        $avisoNickname = "La contraseña es incorrecta, introudcela de nuevo.";
        header("location: ../vista/login.php?avisoNickname=$avisoNickname");
        exit;
    }
} else {
    $aviso = "NO TINES CUENTA, regístrate.";
    header("location: ../vista/login.php?aviso=$aviso"); //Preguntar a Nico si está bien.
    exit;
}

//Nico se que con los comentarios está un poco guarro,
// pero me sirve para recordar las pruebas que hice, si quieres lo puedes borrar
?>
