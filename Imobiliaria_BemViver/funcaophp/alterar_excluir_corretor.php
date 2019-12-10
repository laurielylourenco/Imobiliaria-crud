<?php  
header("Content-Type: text/html; charset=iso-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);
//definir variaveis 

$ComandoSQL="";
  //abre conexao com banco dados
  require_once 'conn.php';
  $cresci=$_GET['cresci'];
  
  switch ($_POST['form_corretor'])
  {
    case "editar":
    try{
      $cresci= $_POST['cresci'];
      $nome= $_POST['nome']; 
      $email=$_POST['email'];
      $tel_corretor = $_POST['tel_corretor']; 

      $stmt = $conn->prepare('UPDATE corretor SET  
              nome =:nome,
              email = :email,
              tel_corretor = :tel_corretor WHERE cresci = :cresci');
      
            $stmt->bindValue(':cresci', $cresci);
            $stmt->bindValue(':nome', $nome );
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':tel_corretor', $tel_corretor);      
            $stmt->execute();

          echo "<script>alert('Informação alterada com sucesso!');
          window.location='consulta_corretor.php';</script>";
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
      $cresci = $_POST['cresci'];
      $stmt = $conn->prepare('DELETE from corretor WHERE cresci = :cresci');
      $stmt->bindValue(':cresci', $cresci);
      $stmt->execute();
        echo "<script>alert('Exclusão realizada com sucesso!');window.location='consulta_corretor.php';</script>";
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

    $ComandoSQL = "select * from corretor where cresci = '" . $cresci . "'";
//	echo $ComandoSQL;
//	exit;
    $result = $conn->query($ComandoSQL);
      if (!$result)
        {
          echo "<script>alert('Informação não encontratada!');window.location='consulta_corretor.php';</script>";
          exit;
        }
    $row = $result->fetch(PDO::FETCH_OBJ)
?>