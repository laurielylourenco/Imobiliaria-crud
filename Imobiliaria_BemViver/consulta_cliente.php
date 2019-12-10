<?php  
header("Content-Type: text/html; charset=ISO-8859-1",true) ;
error_reporting(E_ERROR | E_WARNING | E_PARSE);?>
<html>
<head>
  <title>Consulta</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="cor.css" />
  <script type="text/javascript" src="movi.js"></script>
  
</head>

<body>
  <div id="wrapper" class="active">  
    <?php require_once 'menu.php';?>

  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <div class="col-md-12">
        <p class="well lead">Consulta imoveis</p>
         <div class="container">
          <div class="row"> <!-- div da esquerda -->
             <?php 
             try{
              require_once 'funcaophp/conn.php';
              $result = $conn->query("SELECT * FROM  cliente");
              if ($result) 
              {
              
                echo "<table class= table table-responsive>"; 
                echo "<thead>";
                echo "<tr>\n";

                echo "<th scope=col>\n";
                echo "<b>Nome</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>CPF</b>\n";
                echo "</th>\n";

                echo "<th scope=col>\n";
                echo "<b>Logradouro</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Numero Local</b>\n";
                echo "</th>\n";


                echo "<th scope= col>\n";
                echo "<b>Celular</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Status</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Data de Cadastro</b>\n";
                echo "</th>\n";

                echo "</tr>\n";
                echo "</thead>";
                while ($row = $result->fetch(PDO::FETCH_OBJ))
                 {
                  echo "<tbody>";
                  echo "<tr>\n";
                  echo "<td>\n";
                  echo $row->nome. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->cpf. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->logra. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->nume_local . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->celular. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->estado. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->data. "&nbsp;\n";
                  echo "</td>\n";    
                  echo "<td>\n";
                  echo "<a href='pagina_alterar_excluir_cliente.php?cpf=".$row->cpf . "'>";
                  echo "<button class= btn btn-secondary >Excluir e Editar</button></a>&nbsp;\n";  
                  echo "</td>\n";
                  echo "</tr>\n";
                  echo "</tbody>";
                 } 
                
              }//FECHA IF
              else{
                echo "<p>Nenhum imovel foi encontrado!</p>";
              }
                echo "</table>";

                  $conn = null;

             } 
             catch(PDOException $e)
              {
                print "Erro!: " . $e->getMessage() . "<br/>";
              die();
              }
             ?>
        </div>
          </div>
        </div>
    </div>
    </div>
  </div>
</div>
</body>
</html>