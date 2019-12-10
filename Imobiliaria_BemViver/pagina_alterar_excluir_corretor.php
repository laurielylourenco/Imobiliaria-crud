<?php require_once 'funcaophp/alterar_excluir_corretor.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar/Excluir</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
	<link rel="stylesheet" href="cor.css" />
  <script type="text/javascript" src="movi.js"></script>
  <script type="text/javascript" src="js/botao_corretor.js"></script>
</head>

<body>
<div id="wrapper" class="active">  
    <!-- Sidebar --><!-- Sidebar -->
   <div id="page-content-wrapper">
      
    <div class="page-content inset">
        <div class="row">
        <div class="col-md-12">
            <p class="well lead">Alterar/Excluir Dados</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- -->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                       <form id="cadastra_corretor" method="post" class="form" role="form" name="form_alteracao_exclusao_corretor" action="pagina_alterar_excluir_corretor.php">

                              <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                    <label for="cresci">Cresci:</label>
                                    <input type="text" class="form-control" name="cresci" id="cresci" readonly  autofocus  value="<?php echo $row->cresci;?>"/> 
                                </div>

                                <div class="col-xs-6 col-md-9 form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" required  value="<?php echo $row->nome;?>">
                                </div>

                                 <div class="col-xs-6 col-md-9 form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" name="email" id="email" required value="<?php echo $row->email?>">
                                </div>

                                 <div class="col-xs-4 col-md-3 form-group">
                                    <label for="tel_corretor">Contato</label>
                                    <input type="text" class="form-control" name="tel_corretor" id="tel_corretor" required value="<?php echo $row->tel_corretor?>">
                                </div>        
                            </div> <!-- fim row -->
                            <br> <!-- -->
                          <!---->
                            <br /> 
                                                     
                            <div class="row">
                              <div class="col-xs-12 col-md-12 form-group">
                               <input type="hidden" class="form-control" name="form_corretor" value="cadastro_corretor">

                                <button name="editar" type="button" class="btn btn-success" value="editar"  onClick="define_operacao('alt');">EDITAR</button>
                                    <!--as açoes serao definidas por java script -->
                                <button name="excluir" type="button" class="btn btn-danger" value="excluir" onClick="define_operacao('exc');">EXCLUIR</button>

                                <div class="col-xs-6 col-md-3 form-group">
                                <p><?php echo $_SESSION['user_name'];?>
                                <a class="btn btn-link" href="login/logout.php">Sair</a></p>
                                </div>                            
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