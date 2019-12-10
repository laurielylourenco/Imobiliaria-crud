<?php  
header("Content-Type: text/html; charset=iso-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 

$ComandoSQL="";
  //abre conexao com banco dados
  require_once 'conn.php';
  $cpf=$_GET['cpf'];
  
  switch ($_POST['form_user'])
  {
    case "editar":
    try{
      $nome= $_POST['nome'];
      $cpf= $_POST['cpf'];
      $logra=$_POST['logra'];
      $nume_local = $_POST['nume_local'];
      $celular = $_POST['celular'];
      $estado= $_POST['estado'];
      $data=$_POST['data']; 

      $stmt = $conn->prepare('UPDATE cliente SET  
              nome =:nome,
              logra = :logra,
              nume_local = :nume_local,
              celular = :celular,
              data = :data,           
              estado = :estado WHERE cpf = :cpf');
      
            $stmt->bindValue(':cpf', $cpf);
            $stmt->bindValue(':nome', $nome );
            $stmt->bindValue(':logra', $logra);
            $stmt->bindValue(':nume_local', $nume_local);
            $stmt->bindValue(':celular', $celular);
            $stmt->bindValue(':estado', $estado);
            $stmt->bindValue(':data', $data);
            $stmt->execute();

          echo "<script>alert('Imovel alterada com sucesso!');
          window.location='consulta_cliente.php';</script>";
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
      $cpf = $_POST['cpf'];
      $stmt = $conn->prepare('DELETE from cliente WHERE cpf = :cpf');
      $stmt->bindValue(':cpf', $cpf);
      $stmt->execute();
        echo "<script>alert('Exclusão realizada com sucesso!');window.location='consulta_cliente.php';</script>";
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

    $ComandoSQL = "select * from cliente where cpf = '" . $cpf . "'";
//	echo $ComandoSQL;
//	exit;
    $result = $conn->query($ComandoSQL);
      if (!$result)
        {
          echo "<script>alert('Imovel não encontrado!');window.location='consulta_cliente.php';</script>";
          exit;
        }
    $row = $result->fetch(PDO::FETCH_OBJ)
?>