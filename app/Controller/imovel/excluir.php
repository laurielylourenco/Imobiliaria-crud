<?php

    if (isset($_GET['id']) && isset($_POST['excluir_imovel']) ) {
        
        $id_excluir = $_GET['id'];

        $imovel->deletarImovel($id_excluir);
        echo "<script>alert('Imovel excluido com sucesso!');
        window.location='listar_imovel.php';</script>";

        
    }