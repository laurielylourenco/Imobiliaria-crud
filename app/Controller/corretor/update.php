<?php
if(isset($_POST['submitEditarCorretor']) and isset($_GET['id'])){
   
    $id = $_GET['id'];
    $cresci = $_POST['cresci'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    if (!empty($cresci)) {
            
         $fun->atualizarFuncionario($id,$cresci,$nome,$email,$tel);
          echo "<script>alert(' funcionario atualizado');
            window.location='listar_corretor.php';</script>"; 
    }
}