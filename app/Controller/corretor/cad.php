<?php
 
     $fun = new Corretor();
     
    if (isset($_POST['submitCorretor'])) {


        $cresci = $_POST['cresci'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $tel = $_POST['tel_corretor'];
       
        if (!empty($cresci)) {
            
            $fun->cadastrarFuncionario($cresci,$nome,$email,$tel);
             echo "<script>alert('Novo funcionario cadastrado');
                        window.location='area_privada.php';</script>"; 
        }
    }