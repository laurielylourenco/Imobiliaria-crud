<?php
    require_once  'Database.class.php';
    class Busca extends Database
    {
      /*   private $data = array();
	
		public function __set($name, $value){
			$this->data[$name] = $value;
		}
		
		public function __get($name){
			if (array_key_exists($name, $this->data)) {
				return $this->data[$name];
			}
			$trace = debug_backtrace();
			trigger_error(
				'Undefined property via __get(): ' . $name .
				' in ' . $trace[0]['file'] .
				' on line ' . $trace[0]['line'],
				E_USER_NOTICE);
			return null;
		} */ 

        public function desconectar(){
      		 $this->conn = null;
        }

        public function buscaDados($queryDeBusca){
            $stmt = $this->conn->prepare($queryDeBusca);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    