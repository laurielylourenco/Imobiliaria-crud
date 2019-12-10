<?php  
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 
$nome = "";
$cpf = 0;
$logra="";
$nume_local= 0;
$celular = 0;
$estado = "";
$data= 0;
 // mudar isso nos outros codigo 
  if ($_POST['form_user'] == "cadastro_usuario") 
  {
  try
  {
  //abre a conexao com banco
  require 'conn.php';

  $nome= $_POST['nome'];
  $cpf= $_POST['cpf'];
  $logra=$_POST['logra'];
  $nume_local = $_POST['nume_local'];
  $celular = $_POST['celular'];
  $estado= $_POST['estado'];
  $data=$_POST['data']; 
 //codigo sql

  $stmt = $conn->prepare('INSERT INTO cliente VALUES
  (:nome,:cpf,:logra,:nume_local,:celular,:estado,:data)');
      
      $stmt->bindValue(':nome', $nome );
      $stmt->bindValue(':cpf', $cpf);
      $stmt->bindValue(':logra', $logra);
      $stmt->bindValue(':nume_local', $nume_local);
      $stmt->bindValue(':celular', $celular);
      $stmt->bindValue(':estado', $estado);
      $stmt->bindValue(':data', $data);
      $stmt->execute();
 
    }
  catch (PDOException $e)
  {
     // caso ocorra uma exceção, exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
  }
  echo "<script>alert('Cliente cadastrado com sucesso!');window.location='index.php';</script>";
  }
?>