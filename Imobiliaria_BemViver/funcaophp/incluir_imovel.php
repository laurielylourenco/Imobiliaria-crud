<?php  
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 
$codigo_imovel = "";
$tipo = "";
$situcao_atual ="";
$bairro = "";
$cidade ="";
$nome_local ="";
$numero_local = 0;
$numero_quarto = 0;
$numero_banheiro = 0;
$garagem = 0;
$valor_imovel = "";
 // mudar isso nos outros codigo 
  if ($_POST['form_imovel'] == "cadastro_imovel") 
  {
  try
  {
  //abre a conexao com banco
  require 'conn.php';

  $codigo_imovel= $_POST['codigo_imovel'];
  $tipo= $_POST['tipo'];
  $situcao_atual=$_POST['situcao_atual'];
  $bairro = $_POST['bairro'];
  $cidade = $_POST['cidade'];
  $nome_local= $_POST['nome_local'];
  $numero_local=$_POST['numero_local'];
  $numero_quarto= $_POST['numero_quarto'];
  $numero_banheiro=$_POST['numero_banheiro'];
  $garagem=$_POST['garagem'];
  $valor_imovel=$_POST['valor_imovel'];
 //codigo sql

  $stmt = $conn->prepare('INSERT INTO bd_imobiliaria VALUES
  (:codigo_imovel,:tipo,:situcao_atual,:bairro,:cidade,:nome_local,:numero_local,:numero_quarto,:numero_banheiro,:garagem,:valor_imovel)');
      
      $stmt->bindValue(':codigo_imovel', $codigo_imovel );
      $stmt->bindValue(':tipo', $tipo);
      $stmt->bindValue(':situcao_atual', $situcao_atual);
      $stmt->bindValue(':bairro', $bairro);
      $stmt->bindValue(':cidade', $cidade);
      $stmt->bindValue(':nome_local', $nome_local);
      $stmt->bindValue(':numero_local', $numero_local);
      $stmt->bindValue(':numero_quarto', $numero_quarto);
      $stmt->bindValue(':numero_banheiro', $numero_banheiro);
      $stmt->bindValue(':garagem', $garagem);
      $stmt->bindValue(':valor_imovel', $valor_imovel);
      $stmt->execute();
 
    }
  catch (PDOException $e)
  {
     // caso ocorra uma exceção, exibe na tela
    print "Erro!: " . $e->getMessage() . "\n";
    die();
  }
  echo "<script>alert('Imovel cadastrado com sucesso!');window.location='imovel_cadastro.php';</script>";
  }
?>