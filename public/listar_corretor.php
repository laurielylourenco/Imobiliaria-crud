<?php 
    require_once '../app/Model/Corretor.class.php';
    $fun = new Corretor();
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Area Privada</title>
</head>
<body>
<div id="page-content-wrapper">
      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
          <p class="well lead">Lista de Funcionarios    
          </p>
           <div class="container">
            <div class="row"> <!-- div da esquerda -->
               <?php 
               try{
                $result =  $fun->listarCorretor();
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
                  foreach ($result as $row)  
                   {
                    echo "<tbody>";
                    echo "<tr>\n";
                    echo "<td>\n";
                    echo $row['cresci']. "&nbsp;\n";
                    echo "</td>\n";
                    echo "<td>\n";
                    echo $row['nome']. "&nbsp;\n";
                    echo "</td>\n";
                    echo "<td>\n";
                    echo $row['email']. "&nbsp;\n";
                    echo "</td>\n";
                    echo "<td>\n";
                    echo $row['tel'] . "&nbsp;\n";
                    echo "</td>\n";
                    echo "<td>\n";

                    echo "<a href='alterar_excluir_corretor.php?id=".$row["id"] . "'>";
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

                    $result = null;

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

      <a class="btn btn-link ml-5 mt-2" href="./area_privada.php">Voltar</a>
    </div>
</body>
</html>