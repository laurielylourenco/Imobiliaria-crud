<?php include 'index.php';
    require_once '../app/Model/Cliente.class.php';
    require_once '../app/Controller/cliente/cad.php';
?>

	<div id="page-content-wrapper">
      
    <div class="page-content inset">
        <div class="row">
        <div class="col-md-12">
            <p class="well lead">Cadastro de Cliente</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!-- Text input CNPJ e Razao Social-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                        <form id="contact" method="post" class="form" role="form">
                            <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                    <label for="codigo_imovel">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" /> 
                                </div>

                                <div class="col-xs-6 col-md-9 form-group">
                                    <label for="bairro">CPF</label>
                                    <input type="text" class="form-control" name="cpf" id="cpf" >
                                </div>

                                 <div class="col-xs-6 col-md-9 form-group">
                                    <label for="logra">Rua</label>
                                    <input type="text" class="form-control"  name="rua" id="rua" >
                                </div>

                                 <div class="col-xs-4 col-md-3 form-group">
                                    <label for="nume_local">Numero do Local:</label>
                                    <input type="text" class="form-control" name="nume_local" id="nume_local" >
                                </div>
                                
                            </div> <!-- fim row -->
                            <!-- Text input endereco-->
                            
                            <br> <!--pulando uma linha -->
                            <!-- Text input cidade e estado-->
                            <div class="row">
                                <div class="col-xs-6 col-md-9 form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control"  name="celular" id="celular" required>
                                </div>
                               

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="data">Data do Cadastro</label>
                                        <input type="date" class="form-control" name="data" id="data" required>
                                </div>
                                      
                               
                               
                            </div><!--fim Text input cidade e estado-->
                            <br />                          
                            <div class="row">
                              <div class="col-xs-12 col-md-12 form-group">
                               
                                <button type="submit" name="Submit"  class="btn btn-primary">CADASTRAR</button>
                              </div>

                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_user" value="cadastro_usuario">
                                <a href="listar_cliente.php" type="submit" class="btn btn-warning">ALTERAR/EXCLUIR</a>
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
<?php include 'footer.php';;
?>