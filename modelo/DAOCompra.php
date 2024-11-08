<?php 
	class DAOCompra {
		private $con;

		public function __construct() {
			$this->con = Singleton::getConnection();
		}

		function insertCompra($usuario_id, $producto_id, $fecha_compra, $id, $cantidad) {
			$ps = $this->con->prepare("INSERT INTO compras (usuario_id, producto_id, fecha_compra, id, cantidad) VALUES (:usuario_id, :producto_id, :fecha_compra, :id, :cantidad)");

			$ps->bindParam(":usuario_id", $usuario_id);
			$ps->bindParam(":producto_id", $producto_id);
			$ps->bindParam(":fecha_compra", $fecha_compra);
			$ps->bindParam(":id", $id);
			$ps->bindParam(":cantidad", $cantidad);
			$success = $ps->execute();
			if ($success)
				return true;
			else
				return false;	
		}

		function updateCompra($compra) {
			$ps = $this->con->prepare("UPDATE compras SET usuario_id= :usuario_id, producto_id= :producto_id, fecha_compra= :fecha_compra, id= :id, cantidad= :cantidad");
			$ps->bindParam("", $compra);
		}
	}
?>