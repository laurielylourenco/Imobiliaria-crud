<?php
    require_once  'Database.class.php';
    class Busca extends Database
    {
        public function desconectar(){
      		 $this->conn = null;
        }

        public function buscaDados($queryDeBusca){
            $stmt = $this->conn->prepare($queryDeBusca);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    