<?php require_once 'funcaophp/incluir_cliente.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	  <link rel="stylesheet" href="cor.css" />
    <script type="text/javascript" src="movi.js"></script>
</head>

<body>
<div id="wrapper" class="active">  
    <!-- Sidebar --><!-- Sidebar -->
    <?php require_once 'menu.php'; ?>
          
     
    <div id="page-content-wrapper">
      
    <div class="page-content inset">
        <div class="row">
        <div class="col-md-12">
            <p class="well lead">Cadastro de Cliente</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- os inputs-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                    <label for="codigo_imovel">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" min="3" required  autofocus/> 
                                </div>

                                <div class="col-xs-6 col-md-9 form-group">
                                    <label for="bairro">CPF</label>
                                    <input type="text" class="form-control" min="3" name="cpf" id="cpf" required>
                                </div>

                                 <div class="col-xs-6 col-md-9 form-group">
                                    <label for="logra">logradouro</label>
                                    <input type="text" class="form-control" min="3" name="logra" id="logra" required>
                                </div>

                                 <div class="col-xs-4 col-md-3 form-group">
                                    <label for="nume_local">Numero do Local:</label>
                                    <input type="text" class="form-control" min="1" name="nume_local" id="nume_local" required>
                                </div>
                                
                            </div> <!-- fim row -->
                            <!-- Text input endereco-->
                            
                            <br> <!--pulando uma linha -->
                            <!-- Text input cidade e estado-->
                            <div class="row">
                                <div class="col-xs-6 col-md-9 form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" min="3" name="celular" id="celular" required>
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="status">Status:</label>
                                        <input type="text" class="form-control" min="3" name="estado" id="estado" required>
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="data">Data do Cadastro:</label>
                                        <input type="text" class="form-control" name="data" id="data" required>
                                </div>
                                      
                               
                               
                            </div><!--fim Text input cidade e estado-->
                            <br />                          
                            <div class="row">
                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_user" value="cadastro_usuario">
                                <button type="submit"  class="btn btn-primary">CADASTRAR</button>
                              </div>

                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_user" value="cadastro_usuario">
                                <a href="consulta_cliente.php" type="submit" class="btn btn-warning">CONSULTA</a>
                              </div>
                            </div>
                        </form>
                    </div> <!--  -->
                </div> <!--  -->
            </div>
             
            </div>
          </div>
        </div>
    </div>
      
</div>
</body>
</html>
