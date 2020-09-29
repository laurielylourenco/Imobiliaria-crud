<?php
    error_reporting(-1);
    require_once 'index.php';
    require_once '../app/Model/Cliente.class.php';
    $cli = new Cliente();
?>

  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <div class="col-md-12">
        <p class="well lead">Lista de Clientes</p>
         <div class="container">
          <div class="row"> <!-- div da esquerda -->
             <?php 
             try{
              $result = $cli->listarCliente();
              if ($result) 
              {
                
                echo "<table class='table table-hover'>"; 
                echo "<thead>";
                echo "<tr>\n";

                echo "<th scope='col'>\n";
                echo "<b>Nome</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>CPF</b>\n";
                echo "</th>\n";

                echo "<th scope='col'>\n";
                echo "<b>Rua</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Numero do local</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Celular</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Data</b>\n";
                echo "</th>\n";

            
                echo "<th scope= 'col'>\n";
                echo "<b>Actions</b>\n";
                echo "</th>\n";

                echo "</tr>\n";
                echo "</thead>";              
                foreach ($result as $row)  
                {
                  echo "<tbody>";
                  echo "<tr class='table-light'>\n";
                  echo "<td>\n";
                  echo $row['nome']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['cpf']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['rua']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['num'] . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['cel']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['data_br']. "&nbsp;\n";
                  echo "</td>\n";

                  echo "<td>\n";
                  echo "<a href='alterar_excluir_cliente.php?id=".$row['id'] . "'>";
                  echo "<button class= btn btn-secondary >Excluir e Editar</button></a>&nbsp;\n";  
                  echo "</td>\n";
                  echo "</tr>\n";
                  echo "</tbody>";
                 }  
                
              }//FECHA IF
                else
                {
                  echo "<p>Nenhum imovel foi encontrado!</p>";
                }
                  echo "</table>";

                    $cli = null;

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
    <?php require_once 'footer.php';
   
?>