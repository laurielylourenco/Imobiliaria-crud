<?php

    if(isset($_POST['submitExcluirCorretor']) and isset($_GET['id'])){
        $id = $_GET['id'];
        $fun->deletarFuncionario($id);
        echo "<script>alert('funcionario deletado');
            window.location='listar_corretor.php';</script>";
    }