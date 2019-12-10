<?php
session_start(); require_once 'init.php'; require_once 'check.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Corretor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="../cor.css" />
  <script type="text/javascript" src="../movi.js"></script>
</head>
<body>

<div id="wrapper" class="active">  
    <!-- Sidebar --><!-- Sidebar -->        
    <?php
        require_once '../corretor_cadastro.php';
    ?>  
</div>

</body>
</html>


