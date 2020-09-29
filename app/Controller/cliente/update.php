<?php

     if (isset($_POST['editarCliente'])) 
     {
          if (isset($_GET['id']) && !empty($_GET['id'])) 
          {
               $id = $_GET['id'];
               $nome = $_POST['nome'];
               $cpf = $_POST['cpf'];
               $rua = $_POST['rua'];
               $num = $_POST['num'];
               $cel = $_POST['cel'];
               $data = $_POST['data'];
       
               if (!empty($cpf))
               {
                    //var_dump($nome,$cpf,$rua,$num,$cel,$data);
                   $cli->atualizarCliente($id,$nome,$cpf,$rua,$num,$cel,$data);
                   echo "<script>alert('Cliente Atualizado');
                            window.location='listar_cliente.php';</script>"; 
               }
          }
     }

   