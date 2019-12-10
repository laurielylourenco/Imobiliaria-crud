<?php  
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 
$cresci = "";
$nome = "";
$email="";
$tel_corretor= 0;
 // mudar isso nos outros codigo 
  if ($_POST['form_corretor'] == "cadastro_corretor") 
  {
  try
  {
  //abre a conexao com banco
  require 'conn.php';

  $cresci= $_POST['cresci'];
  $nome= $_POST['nome']; 
  $email=$_POST['email'];
  $tel_corretor = $_POST['tel_corretor']; 
 //codigo sql

  $stmt = $conn->prepare('INSERT INTO corretor VALUES
  (:cresci,:nome,:email,:tel_corretor)');
      
      $stmt->bindValue(':cresci', $cresci );
      $stmt->bindValue(':nome', $nome);
      $stmt->bindValue(':email', $email);
      $stmt->bindValue(':tel_corretor', $tel_corretor);
      $stmt->execute();
 
    }
  catch (PDOException $e)
  {
     // caso ocorra uma exceção, exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
  }
  echo "<script>alert('Cliente cadastrado com sucesso!');window.location='../login/panel.php';</script>";
  }
?>