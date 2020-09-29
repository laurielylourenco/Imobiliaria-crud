<?php
    require_once "Database.class.php";
    class Login extends Database
    {
        public function loginUser($numeroSenha,$senhaUsuario){
            
            $stmt = $this->conn->prepare("SELECT * from funcionario where numero = :num and password = :senha");
            $stmt->bindValue(':num', $numeroSenha);
            $stmt->bindValue(':senha', $senhaUsuario);
            $stmt->execute();

            $buscaFuncionario = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return print_r($buscaFuncionario[0]['numero']);
             if($buscaFuncionario){
                session_start();
                $_SESSION['estaLogado'] = true;
                $_SESSION['user_id'] =  1;
                $_SESSION['user_name'] = $buscaFuncionario[0]['numero'];
                 
                echo "<script>alert('User logado !!!');window.location='area_privada.php';</script>";                
            }else{
                echo "Usuário ou senha inválidos!";
            } 
            
        } 

        public  function isLoggedIn(){
            //verifica se esta logado no sistema
            if (!isset($_SESSION['estaLogado']) || $_SESSION['estaLogado'] !== true)
            {
                return false;
            }
                 return true;
        } 
         public function logout(){
            session_start();
            $_SESSION['estaLogado'] = false;
            session_destroy();
           
          
                  
        } 

        public function makeHash($senhaNaoEncriptada){
            return sha1(md5($senhaNaoEncriptada));
        }
    }
    