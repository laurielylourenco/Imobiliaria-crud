<?php
     if(isset($_GET['id'])){
    $id = $_GET['id'];
    $row = $fun->buscarIdCorretor($id);
    }