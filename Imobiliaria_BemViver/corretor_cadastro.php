<?php require_once 'funcaophp/incluir_corretor.php'; ?> 
<!-- esse formulario é referente ao do corretor depois do login feito -->
<div id="page-content-wrapper">
      
    <div class="page-content inset">
        <div class="row">
        <div class="col-md-12">
            <p class="well lead">Cadastro do Corretor</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text -->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                        <form id="cadastra_corretor" method="post" class="form" role="form">
                              <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                    <label for="cresci">Cresci:</label>
                                    <input type="text" class="form-control" name="cresci" id="cresci" required  autofocus/> 
                                </div>

                                <div class="col-xs-6 col-md-9 form-group">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" required>
                                </div>

                                 <div class="col-xs-6 col-md-9 form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>

                                 <div class="col-xs-4 col-md-3 form-group">
                                    <label for="tel_corretor">Contato</label>
                                    <input type="text" class="form-control" name="tel_corretor" id="tel_corretor" required>
                                </div>        
                            </div> <!-- fim row -->
                            <br> <!-- -->
                          <!---->
                            <br /> 
                                                     
                            <div class="row">
                                <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_corretor" value="cadastro_corretor">
                                <button type="submit" id="button_ok" class="btn btn-primary">CADASTRAR</button>
                                </div>

                                <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_corretor" value="cadastro_corretor">
                                <a href="../consulta_corretor.php" type="submit" class="btn btn-warning">ALTERAR/EXCLUIR</a>
                                </div>
                                <div class="col-xs-6 col-md-3 form-group">
                                    <p><?php echo $_SESSION['user_name']; ?>  <a class="btn btn-link" href="logout.php">Sair</a></p>
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