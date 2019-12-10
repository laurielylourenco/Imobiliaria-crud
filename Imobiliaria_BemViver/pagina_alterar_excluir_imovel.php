<?php  
require_once 'funcaophp/alteraExclui.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Alterar/Excluir</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="cor.css" />
  <script type="text/javascript" src="movi.js"></script>
  <script type="text/javascript" src="js/botao_imovel.js"></script>
</head>
<body>

<div id="wrapper" class="active">  
    <!-- Sidebar -->
            <!-- Sidebar -->
     <?php require_once 'menu.php';
    ?>
          
      <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
      <div class="page-content inset">
        <div class="row">
          <div class="col-md-12">
            <p class="well lead">Cadastro de Imovel</p>
            <div class="container">
              <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
            <div class="col-sm-8 contact-form">
             <!-- div da direita -->
                <form id="contact" method="post" action="pagina_alterar_excluir_imovel.php" name="form_alteracao_exclusao_imovel" class="form" role="form">

                  <div class="row">
                      <div class="col-xs-6 col-md-3 form-group">
                        <label for="codigo_imovel">Codigo do Imovel:</label>
                        <input type="text" class="form-control" name="codigo_imovel" id="codigo_imovel" readonly autofocus value=" <?php echo $row->codigo_imovel;?>"/> 
                      </div>

                      <div class="col-xs-4 col-md-9 form-group">
                          <label for="tipo">Tipo:</label>
  
                          <select class="form-control" name="tipo" id="tipo" required>

                          <option value="Apartamento"<?php echo $tipo =='Apartamento'?'selected':'';?> >Apartamento</option>

                          <option value="Kitnet" <?php echo $tipo =='Kitnet'?'selected':'';?> >Kitnet</option>
                          <option value="Casa" <?php echo  $tipo =='Casa'?'selected':'';?> >Casa</option>
                          <option value="Cobertura" <?php echo  $tipo =='Cobertura'?'selected':'';?> >Cobertura</option>
                         
                        </select>
                      </div>

                      </div> <!-- fim row -->
                            <!-- Text input endereco-->
                      <div class="col-xs-4 col-md-12 form-group">
                          <div class="controls">
                              <label for="situcao_atual">Situaçao Atual:</label>
                              <select class="form-control" name="situcao_atual" id="situcao_atual" required>
                                 <option>Alugado</option>
                                  <option>Vazio</option>
                                 </select>
                            </div>
                      </div><!--fim control-group-->
                      <br> <!--pulando uma linha -->

                      <!-- Text input cidade e estado-->
                      <div class="row">
                      <div class="col-xs-6 col-md-9 form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" min="3" name="bairro" id="bairro" required  value="<?php echo $row->bairro;?>" >
                      </div>
                       <div class="col-xs-4 col-md-3 form-group">
                            <label for="cidade">Cidade:</label>
                            <input type="text" class="form-control" min="3" name="cidade" id="cidade" required value="<?php echo $row->cidade;?>">
                        </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for="nome_local">Nome do Local:</label>
                          <input type="text" class="form-control" min="3" name="nome_local" id="nome_local" placeholder="Ex: Rua Getulio Vargas" required value="<?php echo $row->nome_local;?>">
                      </div>
                      <div class="col-xs-4 col-md-3 form-group">
                            <label for="numero_local">Numero do Local:</label>
                            <input type="text" class="form-control" min="1" name="numero_local" id="numero_local" required value="<?php echo $row->numero_local;?>">
                      </div>
                      <div class="col-xs-4 col-md-6 form-group">
                            <label for="numero_quarto">Numero de Quartos:</label>
                            <input type="text" class="form-control" name="numero_quarto" id="numero_quarto" required value="<?php echo $row->numero_quarto;?>">
                      </div>
                      </div><!--fim Text input cidade e estado-->
                      
                      <div class="row">
                      <div class="col-xs-8 col-md-3 form-group">
                            <div class="controls">
                              <label for="numero_banheiro">Banheiros:</label>
                              <input type="text" class="form-control" name="numero_banheiro" id="numero_banheiro" required value="<?php echo $row->numero_banheiro;?>">
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <div class="controls">
                              <label for="garagem">Vagas na Garagem:</label>
                                <input type="text" class="form-control" name="garagem" id="garagem" required maxlength="1" value="<?php echo $row->garagem;?>">
                            </div>
                      </div>
                      <div class="col-xs-6 col-md-3 form-group">
                          <label for="valor_imovel">Valor do Imovel:</label>
                              <select class="form-control" name="valor_imovel" id="valor_imovel" required>
                                <option>Ate 60.000</option>
                                <option>60.000 ate 80.000</option>
                                <option>80.000 ate 100.000</option>
                             </select>
                      </div>
                    </div>
                            <br/>

                            <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">

                                    <input type="hidden" class="form-control" name="form_imovel" value="pesquisa">
                                    <button name="editar" type="button" class="btn btn-success" value="editar"  onClick="define_operacao('alt');">EDITAR</button>
                                    <!--as açoes serao definidas por java script -->
                                    <button name="excluir" type="button" class="btn btn-danger" value="excluir" onClick="define_operacao('exc');">EXCLUIR</button>
                                    <!--<button class="btn btn-primary pull-right" type="submit">Enviar</button>-->
                                </div>
                            </div>
                        </form>
                    </div> <!-- fim div da direita -->
                </div> <!-- fim div da esquerda -->
            </div>
             
            </div>
          </div>
        </div>
    </div>
      
</div>
</body>
</html>