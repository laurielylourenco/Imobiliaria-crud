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
   

  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <div class="col-md-12">
        <p class="well lead">Consulta Correto    
        </p>
         <div class="container">
          <div class="row"> <!-- div da esquerda -->
             <?php 
             try{
              require_once 'funcaophp/conn.php';
              $result = $conn->query("SELECT * FROM  Corretor");
              if ($result) 
              {
              
                echo "<table class= table table-responsive>"; 
                echo "<thead>";
                echo "<tr>\n";

                echo "<th scope=col>\n";
                echo "<b>Cresci</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Nome</b>\n";
                echo "</th>\n";

                echo "<th scope=col>\n";
                echo "<b>Email</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Contato</b>\n";
                echo "</th>\n";
              
                echo "</thead>";
                while ($row = $result->fetch(PDO::FETCH_OBJ))
                 {
                  echo "<tbody>";
                  echo "<tr>\n";
                  echo "<td>\n";
                  echo $row->cresci. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->nome. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->email. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->tel_corretor . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";

                  echo "<a href='pagina_alterar_excluir_corretor.php?cresci=".$row->cresci . "'>";
                  echo "<button class= btn btn-secondary >Excluir e Editar</button></a>&nbsp;\n";  
                  echo "</td>\n";
                  echo "</tr>\n";
                  echo "</tbody>";
                 } 
                
              }//FECHA IF
              else{
                echo "<p>Nenhum corretor foi encontrado!</p>";
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