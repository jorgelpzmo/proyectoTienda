<?php 
    require '../modelo/DAOProducto.php';

    class controladorMostrarTrastienda{
        private $DAOProducto=null;
        public function __construct(){
            $this->DAOProducto = new DAOProducto();
        }
        public function mostrarProductos(){
            return $this->DAOProducto->selectAllProductos();
        }
    }
    header('Location: vistaMostrarTrastienda.php');

?>