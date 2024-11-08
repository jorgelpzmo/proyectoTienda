<?php 
    require_once 'Singleton.php';
    require_once 'DTOProducto.php';

    class DAOProducto{
        private $conn;

        public function __construct(){
            $this->conn = Singleton::getConn();
        }

        public function getProductoById($id){
            $stmt = $this->conn->prepare("SELECT * FROM productos WHERE id = :id");
            $stmt->bind_param(":id", $id);
            $stmt->execute();
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);

            if($fila){
                $DTOProducto=new DTOProducto($fila['nombre'], $fila['descripcion'], $fila['precio'], $fila['imagen'], $fila['stock']);
                $DTOProducto->setId( $fila['id'] );
                return $DTOProducto;
            }else{
                return false;
            }
        }

        public function getAllProductos(){
            $stmt = $this->conn->prepare('SELECT * FROM productos WHERE id = :id');
            $stmt->execute();
            $fila = $stmt->fetch(PDO::FETCH_ASSOC);
            
            $productos = [];
            foreach($fila as $resultado){
                $DTOProducto=new DTOProducto($resultado['nombre'], $resultado['descripcion'], $resultado['precio'], $resultado['imagen'], $resultado['stock']);
                $DTOProducto->setId( $resultado['id'] );
                $productos[] = $DTOProducto;
            }
            return $productos;
        }

        public function addProducto($producto){
            
        }
}
?>