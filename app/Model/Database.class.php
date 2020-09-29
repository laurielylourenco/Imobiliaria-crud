<?php
	class Database{
		protected $host = 'localhost';
		protected $user = 'adm';
		protected $password = 'lourenco';
		protected $dbname = 'bd_imobiliaria';
		protected $conn;

		public function __construct()
		{
			try{
				$this->conn = new PDO("mysql:dbname=".$this->dbname.";host=".$this->host,$this->user,$this->password); 
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e){
			echo "Erro com Banco de Dados :".$e->getMessage(); 
			exit(); 
			}catch(Exception $e)
			{
				echo "Erro Generico:".$e->getMessage();  
			}			
		}

	}


	
	