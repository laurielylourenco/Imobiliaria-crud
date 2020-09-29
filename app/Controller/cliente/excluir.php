<?php

    if (isset($_POST['excluirCliente']) && isset($_GET['id'])) {
        $id_deletar = $_GET['id'];

        $cli->deletarCliente($id_deletar);
         echo "<script>alert('Cliente excluido com sucesso!');
        window.location='listar_cliente.php';</script>"; 
    }