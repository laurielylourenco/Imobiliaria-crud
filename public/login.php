<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Area Privada</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   
   <link rel="stylesheet" type="text/css" href="../resources/css/login.css">
</head>


    <div class="sidenav">
         <div class="login-main-text">
            <h2> Imobiliaria CRUD<br>Area Privada</h2>
          
         </div>
      </div>


      <div class="main">
      <?php
            require_once '../app/Model/Login.class.php';
            $login = new Login();
            require_once '../app/Controller/corretor/loginCorretor.php';
            
      ?>
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form id="form_login"  method="POST">
                  <div class="form-group">
                     <label>Pessoa autorizada:</label>
                     <br>
                     <input type="text" class="form-control" autocomplete="off" id="numero" name="numeroSenha" placeholder="Seu numero = 123">
                  </div>
                  <div class="form-group">
                     <label>Senha:</label>
                     <br>
                     <input type="password" id="password" name="senhaUSuario" class="form-control" placeholder="Senha = imovel">
                  </div>
                 <button type="submit" name="loginUsuario" id="login"  class="btn btn-outline-dark">Login</button>
               </form>
            </div>

         </div>
      </div>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</html>

