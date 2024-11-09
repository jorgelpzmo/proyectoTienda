<?php 
	require '../modelo/DAOCompra.php';
	class ControlCompra {

		private $DAOCompra;

		public function __construct() {
			$this->DAOCompra = new DAOCompra();
		}

		public function getCompra($id) {
			return $this->DAOCompra->selectCompra($id);
		}

		public function getAllCompras() {
			return $this->DAOCompra->selectAll();
		}

		public function nuevoCompra($Compra) {
			return $this->DAOCompra->insertCompra($Compra);
		}
	
		public function borrarCompra($id) {
			if(self::getCompra($id)) {
				$this->DAOCompra->deleteCompra($id);
				return 1;
			}
			else {
				return -1;
			}
		}
	
		public function actualizarCompra($Compra) {
			return $this->DAOCompra->updateCompra($Compra);
		}
	}
?>