<?php 
    require_once '../app/Model/Corretor.class.php';

    $fun = new Corretor();
    
    require_once '../app/Controller/corretor/id_update.php';
    require_once '../app/Controller/corretor/update.php';  
    require_once '../app/Controller/corretor/excluir.php';
   
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
              <p class="well lead">Alterar/Excluir Dados</p>
                <div class="container">
                  <div class="row"> <!-- div da esquerda -->
                      <!-- -->
                      <div class="col-sm-8 contact-form"> <!-- div da direita -->
                         <form id="cadastra_corretor" method="post" class="form" role="form">
  
                                <div class="row">
                                  <div class="col-xs-6 col-md-3 form-group">
                                      <label for="cresci">Cresci:</label>
                                      <input type="text" class="form-control" name="cresci" id="cresci"  value="<?php echo $row['cresci'];?>"/> 
                                  </div>
  
                                  <div class="col-xs-6 col-md-9 form-group">
                                      <label for="nome">Nome</label>
                                      <input type="text" class="form-control" name="nome" id="nome"  value="<?php echo $row['nome'];?>">
                                  </div>
  
                                   <div class="col-xs-6 col-md-9 form-group">
                                      <label for="email">Email:</label>
                                      <input type="text" class="form-control" name="email" id="email"  value="<?php echo $row['email'];?>">
                                  </div>
  
                                   <div class="col-xs-4 col-md-3 form-group">
                                      <label for="tel_corretor">Contato</label>
                                      <input type="text" class="form-control" name="tel" id="tel_corretor"  value="<?php echo $row['tel'];?>">
                                  </div>        
                              </div> <!-- fim row -->
                              <br> <!-- -->
                            <!---->
                              <br /> 
                                                       
                              <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">
                                 <input type="hidden" class="form-control" name="form_corretor" value="cadastro_corretor">
  
                                  <button name="submitEditarCorretor" type="submit" class="btn btn-success" name="submitEditar">EDITAR</button>
                                      <!--as açoes serao definidas por java script -->
                                  <button name="submitExcluirCorretor" type="submit" class="btn btn-danger" value="submitExcluir" >EXCLUIR</button>
  
                                 <!--  <div class="col-xs-6 col-md-3 form-group">
                                  <p><?php /* echo $_SESSION['user_name']; */?>
                                  <a class="btn btn-link" href="login/logout.php">Sair</a></p>
                                  </div>      -->                       
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
        
</body>
</html>