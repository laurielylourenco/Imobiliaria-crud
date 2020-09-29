<?php
    error_reporting(-1);
    require_once 'index.php';
    require_once '../app/Model/Imovel.class.php';
    $imovel = new Imovel();
?>

  <div id="page-content-wrapper">
    <div class="page-content inset">
      <div class="row">
        <div class="col-md-12">
        <p class="well lead">Consulta imoveis</p>
         <div class="container">
          <div class="row"> <!-- div da esquerda -->
             <?php 
             try{
              $result = $imovel->listarImovel();
              if ($result) 
              {
                
                echo "<table class='table table-hover'>"; 
                echo "<thead>";
                echo "<tr>\n";

                echo "<th scope='col'>\n";
                echo "<b>Código Imovel</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Tipo</b>\n";
                echo "</th>\n";

                echo "<th scope='col'>\n";
                echo "<b>Situaçao Atual</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Bairro</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Cidade</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Nome Local</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Numero Local</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Numero Quarto</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Numero Banheiro</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col' >\n";
                echo "<b>Garagem</b>\n";
                echo "</th>\n";

                echo "<th scope= 'col'>\n";
                echo "<b>Valor Imovel</b>\n";
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
                  echo $row['codigo_imovel']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['tipo']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['situcao_atual']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['bairro'] . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['cidade']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['nome_local']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['numero_local'] . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['numero_quarto']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['numero_banheiro']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['garagem'] . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row['valor_imovel']. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo "<a href='alterar_excluir_imovel.php?id=".$row['id'] . "'>";
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

                    $imovel = null;

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