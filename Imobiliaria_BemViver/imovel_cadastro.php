<?php
require_once 'funcaophp/incluir_imovel.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Imovel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!------  ---------->
  	<link rel="stylesheet" href="cor.css" />
    <script type="text/javascript" src="movi.js"></script>
</head>

<body>
<div id="wrapper" class="active">  
    <!-- Sidebar -->
    <!-- Sidebar -->
    <?php require_once 'menu.php';
    ?>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!--div! -->
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead">Cadastro de Imovel</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!--linhas de input-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                        <label for="codigo_imovel">Codigo do Imovel:</label>
                                        <input type="text" class="form-control" name="codigo_imovel" id="codigo_imovel" placeholder="codigo" min="3" maxlength="3" required  autofocus/> 
                                </div>
                                <div class="col-xs-4 col-md-9 form-group">
                                        <label for="tipo">Tipo:</label>
                                        <select class="form-control" name="tipo" id="tipo" required>
                                            <option id="ap" value="Apartamento">Apartamento</option>
                                            <option id="ki" value="Kitnet">Kitnet</option>
                                            <option id="ca" value="Casa">Casa</option>
                                            <option id="co" value="Cobertura" >Cobertura</option>
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
                                        <input type="text" class="form-control" min="3" name="bairro" id="bairro" required>
                                </div>
                                <div class="col-xs-4 col-md-3 form-group">
                                    <label for="cidade">Cidade:</label>
                                        <input type="text" class="form-control" min="3" name="cidade" id="cidade" required>
                                </div>
                                <div class="col-xs-6 col-md-3 form-group">
                                        <label for="nome_local">Nome do Local:</label>
                                        <input type="text" class="form-control" min="3" name="nome_local" id="nome_local" placeholder="Ex: Rua Getulio Vargas" required>
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="numero_local">Numero do Local:</label>
                                        <input type="text" class="form-control" min="1" name="numero_local" id="numero_local" required>
                                </div>
                                <div class="col-xs-4 col-md-6 form-group">
                                        <label for="numero_quarto">Numero de Quartos:</label>
                                        <input type="text" class="form-control" name="numero_quarto" id="numero_quarto" required>
                                </div>
                            </div><!--informaçao da casa-->
                            <div class="row">
                            <div class="col-xs-8 col-md-3 form-group">
                                <div class="controls">
                                    <label for="numero_banheiro">Banheiros:</label>
                                    <input type="text" class="form-control" name="numero_banheiro" id="numero_banheiro" required>
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-3 form-group">
                                 <div class="controls">
                                    <label for="garagem">Vagas na Garagem:</label>
                                    <input type="text" class="form-control" name="garagem" id="garagem" required maxlength="1">
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

                            <br />                          
                            <div class="row">
                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_imovel" value="cadastro_imovel">
                                <button  type="submit" class="btn btn-primary">CADASTRAR</button>
                              </div>

                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_imovel" value="cadastro_imovel">
                                <a href="consulta.php" type="submit" class="btn btn-warning">ALTERAR/EXCLUIR</a>
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