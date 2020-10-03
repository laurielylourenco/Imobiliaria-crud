<?php
  require_once "../../Model/Login.class.php";
  $login = new Login();
  
  session_start();

  if (isset($_SESSION['estaLogado'])) {
    $login->logout();
    echo "<script>alert('Logout');
    window.location='../../../public/index.php';</script>";
  }