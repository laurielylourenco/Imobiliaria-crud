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
              $result = $conn->query("SELECT * FROM  bd_imobiliaria");//seleciona tabela no bd
              if ($result) 
              {
              
                echo "<table class= table table-responsive>"; 
                echo "<thead>";
                echo "<tr>\n";

                echo "<th scope=col>\n";
                echo "<b>Código Imovel</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Tipo</b>\n";
                echo "</th>\n";

                echo "<th scope=col>\n";
                echo "<b>Situaçao Atual</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Bairro</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Cidade</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Nome Local</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Numero Local</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Numero Quarto</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Numero Banheiro</b>\n";
                echo "</th>\n";

                echo "<th scope= col >\n";
                echo "<b>Garagem</b>\n";
                echo "</th>\n";

                echo "<th scope= col>\n";
                echo "<b>Valor Imovel</b>\n";
                echo "</th>\n";

                echo "</tr>\n";
                echo "</thead>";
                while ($row = $result->fetch(PDO::FETCH_OBJ))
                 {
                  echo "<tbody>";
                  echo "<tr>\n";
                  echo "<td>\n";
                  echo $row->codigo_imovel. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->tipo. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->situcao_atual. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->bairro . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->cidade. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->nome_local. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->numero_local . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->numero_quarto. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->numero_banheiro. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->garagem . "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo $row->valor_imovel. "&nbsp;\n";
                  echo "</td>\n";
                  echo "<td>\n";
                  echo "<a href='pagina_alterar_excluir_imovel.php?codigo_imovel=".$row->codigo_imovel . "'>";
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