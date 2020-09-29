<?php

    $cli = new Cliente();

    if (isset($_POST['Submit'])){
       
       $nome = $_POST['nome'];
       $cpf = $_POST['cpf'];
       $rua = $_POST['rua'];
       $num = $_POST['nume_local'];
       $cel = $_POST['celular'];
       $data = $_POST['data'];
        
       if (!empty($cpf)) {
         $cli->cadastrarCliente($nome,$cpf,$rua,$num,$cel,$data); 
       }
        

    }