<?php

    require "../modelo/DAOusuario.php";

    class ControlUsuario {
        private $DAOUsuario;
        public function __construct() {
			$this->DAOUsuario = new DAOusuario();
		}

        public function getUsuario($id) {
            return $this->DAOUsuario->selectUsuario($id);
        }

        public function getAllUsuarios() {
            return $this->DAOUsuario->selectAllUsuarios();
        }

        public function nuevoUsuario($usuario) {
            return $this->DAOUsuario->insertUsuario($usuario);
        }

        public function actualizarUsuario ($usuario) {
            return $this->DAOUsuario->updateUsuario($usuario);
        }

        public function borrarUsuario($id) {
            if (self::getUsuario()) {
                $this->DAOUsuario->deleteUsuario($id);
                return 1;
            } else {
                return -1;
            }
        }

        public function comprobarUsuario($nickname, $password) {
            return $this->DAOUsuario->comprabarUsuario($nickname, $password); //Esto devuleve también el
            // número de filas del registro
        }
    }
?>
