<?php  
header("Content-Type: text/html; charset=iso-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 

$ComandoSQL="";
  //abre conexao com banco dados
  require_once 'conn.php';
  $codigo_imovel=$_GET['codigo_imovel'];
  
  switch ($_POST['form_imovel'])
  {
    case "editar":
    try{
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

      $stmt = $conn->prepare('UPDATE bd_imobiliaria SET  
              tipo =:tipo, 
              situcao_atual = :situcao_atual,
              bairro = :bairro,
              cidade = :cidade,
              nome_local = :nome_local,
              numero_local = :numero_local,
              numero_quarto = :numero_quarto,
              garagem = :garagem,
              valor_imovel = :valor_imovel WHERE codigo_imovel = :codigo_imovel');

              $stmt->bindValue(':codigo_imovel', $codigo_imovel);
              $stmt->bindValue(':tipo', $tipo);
              $stmt->bindValue(':situcao_atual', $situcao_atual);
              $stmt->bindValue(':bairro', $bairro);
              $stmt->bindValue(':cidade', $cidade);
              $stmt->bindValue(':nome_local', $nome_local);
              $stmt->bindValue(':numero_local', $numero_local);
              $stmt->bindValue(':numero_quarto', $numero_quarto);
              $stmt->bindValue(':garagem', $garagem);
              $stmt->bindValue(':valor_imovel', $valor_imovel);
              $stmt->execute();
      
          echo "<script>alert('Imovel alterada com sucesso!');
          window.location='consulta.php';</script>";
          exit;
          break;
    }
          catch (PDOException $e)
          {
          // caso ocorra uma exceção, exibe na tela
            print "Erro!: " . $e->getMessage() . "\n";
            die();
          }


    case "excluir":
    try{
      $codigo_imovel = $_POST['codigo_imovel'];
      $stmt = $conn->prepare('DELETE from bd_imobiliaria  WHERE codigo_imovel = :codigo_imovel');
      $stmt->bindValue(':codigo_imovel', $codigo_imovel);
      $stmt->execute();
        echo "<script>alert('Exclusão realizada com sucesso!');window.location='consulta.php';</script>";
     exit; 
     break;
    }
    catch (PDOException $e)
    {
    // caso ocorra uma exceção, exibe na tela
      print "Erro!: " . $e->getMessage() . "\n";
      die();
    } 
}

    $ComandoSQL = "select * from bd_imobiliaria where codigo_imovel = '" . $codigo_imovel . "'";
//	echo $ComandoSQL;
//	exit;
    $result = $conn->query($ComandoSQL);
      if (!$result)
        {
          echo "<script>alert('Imovel não encontrado!');window.location='consulta.php';</script>";
          exit;
        }
    $row = $result->fetch(PDO::FETCH_OBJ)
?>