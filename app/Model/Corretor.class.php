<?php
    require_once 'Database.class.php';
    class Corretor extends Database
    {
        public function  cadastrarFuncionario($cresci,$nome,$email,$tel)
        {
           try {
            $stmt = $this->conn->prepare("INSERT into corretor(cresci,nome,email,tel) 
            values(:cresci,:nome,:email,:tel)");

            $stmt->bindValue(':cresci', $cresci);
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':tel', $tel);
            $stmt->execute();
            return true;
           } catch (\Throwable $th) {
                echo "deu ruim com ao cadastrar o corretor".$th->getMessage();
           }
        } 

        public function listarCorretor(){
            try {
				$stmt = $this->conn->query("SELECT * From corretor");
                $listar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $listar;
			} catch (\Throwable $th) {
				echo "erro na hora de buscar corretor".$th->getMessage();
			}
        }

        public function buscarIdCorretor($id)
		{
			$recebeDados = array();
			$stmt = $this->conn->prepare("SELECT * from corretor where id = :id");
			$stmt->bindValue(':id', $id);
			$stmt->execute();

			$recebeDados = $stmt->fetch(PDO::FETCH_ASSOC);
			return $recebeDados;
			
        }

        public function atualizarFuncionario($id,$cresci,$nome,$email,$tel){
            try {
                $stmt = $this->conn->prepare("UPDATE corretor set
                cresci = :c,
                nome = :n,
                email = :e,
                tel = :t where id = :id ");

                $stmt->bindValue(":id", $id);
                $stmt->bindValue(":c", $cresci);
                $stmt->bindValue(":n", $nome);
                $stmt->bindValue(":e", $email);
                $stmt->bindValue(":t", $tel);
             
                $stmt->execute();
                return true; 

            } catch (\Throwable $th) {
                echo "deu ruim ao atualizar do corretor".$th->getMessage();
            }

         
        }
        

        public function deletarFuncionario($id){
			

			try {
				$stmt = $this->conn->prepare("DELETE from corretor where id = :id");
				$stmt->bindValue(':id', $id);
				$stmt->execute();
			} catch (\Throwable $th) 
			{
				echo "deu ruim com delete do corretor".$th->getMessage();
			}
		}



    }
    