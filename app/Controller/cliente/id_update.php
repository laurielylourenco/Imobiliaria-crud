<?php

    if (isset($_GET['id'])) {
       $id = $_GET['id'];
       //chama funcao que vai buscar no banco o id
       $row = $cli->buscarClienteID($id);
    }