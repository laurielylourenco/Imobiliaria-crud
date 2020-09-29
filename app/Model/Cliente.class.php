<?php
    require_once 'Database.class.php';
    class Cliente extends Database
     {
        public function cadastrarCliente($nome,$cpf,$rua,$num,$cel,$data)
        {         
           try {
              $stmt = $this->conn->prepare("INSERT into cliente (nome,cpf,rua,num,cel,data_cliente) 
                values (:nome,:cpf,:rua,:num,:cel,:da)
              ");

                $stmt->bindValue(':nome', $nome, PDO::PARAM_STR);
                $stmt->bindValue(':cpf', $cpf);
                $stmt->bindValue(':rua', $rua);
                $stmt->bindValue(':num', $num);
                $stmt->bindValue(':cel', $cel);
                $stmt->bindValue(':da', $data);
                $stmt->execute();
                return true;
           } 
           catch (\Throwable $th) {

            echo "deu ruim com ao cadastrar o cliente".$th->getMessage();
               
           }
        }

        public function listarCliente(){
           try {

            $stmt = $this->conn->query("SELECT *, DATE_FORMAT(data_cliente,'%d/%m/%Y') as data_br from cliente");
            $listar = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $listar;
           } catch (\Throwable $th) {
            echo "deu ruim com ao listar cliente".$th->getMessage();
           }
        }

        public function buscarClienteID($id){
         $recebeDados = array();
         $stmt = $this->conn->prepare("SELECT  * from cliente where id = :id");
         $stmt->bindValue(':id', $id);
         $stmt->execute();
         $recebeDados = $stmt->fetch(PDO::FETCH_ASSOC);
         return $recebeDados;
        }

        public function atualizarCliente($id,$nome,$cpf,$rua,$num,$cel,$data){
            try{
            $stmt = $this->conn->prepare("UPDATE cliente set 
               nome = :n,
               cpf = :cpf,
               rua = :rua,
               num = :num,
               cel = :cel,
               data_cliente = :d  where id =:id

            ");
            $stmt->bindValue(':id', $id);
            $stmt->bindValue(':n', $nome);
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':rua', $rua);
            $stmt->bindValue(':num', $num);
            $stmt->bindValue(':cel', $cel);
            $stmt->bindValue(':d', $data);
            $stmt->execute();
            return true;

            } catch (\Throwable $th) {
               echo "deu ruim com ao atualizar o cliente".$th->getMessage();
            }
        }


        public function deletarCliente($id)
        {
           try {
             $stmt = $this->conn->prepare("DELETE from cliente where id = :id");
             $stmt->bindValue(':id', $id);
             $stmt->execute();
           } catch (\Throwable $th) {
            echo "deu ruim com ao deletar o cliente".$th->getMessage();
           }
        }
     }   
    
    