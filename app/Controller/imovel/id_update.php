<?php
    //buscando id
 if(isset($_GET['id'])){
    $id = $_GET['id'];
    $row = $imovel->buscarID($id);  
    }
?>