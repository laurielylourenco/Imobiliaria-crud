<?php
    session_start();
    require_once '../app/Model/Corretor.class.php';
    require_once '../app/Controller/corretor/cad.php';
    require_once '../app/Model/Login.class.php';
   
    $login = new Login();
   
     if (!$login->isLoggedIn()){
        header('Location: login.php');
        } 

    //require_once '../app/Controller/corretor/logout.php';
 
   
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
   <!-- esse formulario é referente ao do corretor depois do login feito -->
<div id="page-content-wrapper">
      
      <div class="page-content inset">
          <div class="row">
          <div class="col-md-12">
              <p class="well lead">Cadastro do Corretor</p>
                <div class="container">
                  <div class="row"> <!-- div da esquerda -->
                      <!-- Text -->
                      <div class="col-sm-8 contact-form"> 
                          <form id="cadastra_corretor" method="POST" >
                                <div class="row">
                                  <div class="col-xs-6 col-md-3 form-group">
                                      <label for="cresci">Identidicacao:</label>
                                      <input type="text" class="form-control" name="cresci" id="cresci"/> 
                                  </div>
  
                                  <div class="col-xs-6 col-md-9 form-group">
                                      <label for="nome">Nome</label>
                                      <input type="text" class="form-control" name="nome" id="nome">
                                  </div>
  
                                   <div class="col-xs-6 col-md-9 form-group">
                                      <label for="email">Email:</label>
                                      <input type="email" class="form-control" name="email" id="email">
                                  </div>
  
                                   <div class="col-xs-4 col-md-3 form-group">
                                      <label for="tel_corretor">Contato</label>
                                      <input type="text" class="form-control" name="tel_corretor" id="tel_corretor">
                                  </div>        
                              </div> <!-- fim row -->
                              <br> <!-- -->
                            <!---->
                              <br /> 
                                                       
                              <div class="row">
                                  <div class="col-xs-12 col-md-12 form-group">
                                  <input type="hidden" class="form-control"  name="submitCorretor"  >
                                  <button type="submit" id="button_ok" class="btn btn-primary">CADASTRAR</button>
                                  </div>
  
                                  <div class="col-xs-12 col-md-12 form-group">
                                  <input type="hidden" class="form-control" name="form_corretor" value="cadastro_corretor">
                                  <a href="./listar_corretor.php" type="submit" class="btn btn-warning">ALTERAR/EXCLUIR</a>
                                  </div>
                                  <div class="col-xs-6 col-md-3 form-group">
                                        <a href="../app/Controller/corretor/logout.php" type="submit"  value="Logout" class="btn btn-danger">Logout</a>
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