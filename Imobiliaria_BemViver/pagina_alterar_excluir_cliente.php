<?php require_once 'funcaophp/alterar_excluir_cliente.php';?>
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
  <script type="text/javascript" src="js/botao_cliente.js"></script>
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
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                    <form id="contact" method="post" class="form" role="form" action="pagina_alterar_excluir_cliente.php" name="form_alteracao_exclusao_cliente">
                            
                            <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                    <label for="codigo_imovel">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" min="3" required  autofocus value="<?php echo $row->nome;?>" /> 
                                </div>

                                <div class="col-xs-6 col-md-9 form-group">
                                    <label for="cpf">CPF</label>
                                    <input type="text" class="form-control" min="10" max="10" name="cpf" id="cpf" readonly value="<?php echo $row->cpf;?>">
                                </div>

                                 <div class="col-xs-6 col-md-9 form-group">
                                    <label for="logra">logradouro</label>
                                    <input type="text" class="form-control" min="3" name="logra" id="logra" required value="<?php echo $row->logra;?>">
                                </div>

                                 <div class="col-xs-4 col-md-3 form-group">
                                    <label for="nume_local">Numero do Local:</label>
                                    <input type="text" class="form-control" min="1" name="nume_local" id="nume_local" required value="<?php echo $row->nume_local;?>">
                                </div>
                                
                            </div> <!-- fim row -->
                            <!-- Text input endereco-->
                            
                            <br> <!--pulando uma linha -->
                            <!-- Text input cidade e estado-->
                            <div class="row">
                                <div class="col-xs-6 col-md-9 form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" min="3" name="celular" id="celular" required value="<?php echo $row->celular;?>">
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control" min="3" name="estado" id="estado" required value="<?php echo $row->estado;?>">
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="data">Data do Cadastro</label>
                                        <input type="text" class="form-control" name="data" id="data" required value="<?php echo $row->data;?>">
                                </div>
                               
                            </div><!--fim Text input cidade e estado-->
                            <br />
                              <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">
                                    <input type="hidden" class="form-control" name="form_user" value="pesquisa">
                                    <button name="editar" type="button" class="btn btn-success" value="editar"  onClick="define_operacao('alt');">EDITAR</button>
                                    <!--as açoes serao definidas por java script -->
                                    <button name="excluir" type="button" class="btn btn-danger" value="excluir" onClick="define_operacao('exc');">EXCLUIR</button>
                                    
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