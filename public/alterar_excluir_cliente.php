<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    require_once 'index.php';
    require_once '../app/Model/Cliente.class.php';
    
    $cli = new Cliente();
    
    require_once  '../app/Controller/cliente/id_update.php';
    require_once  '../app/Controller/cliente/update.php'; 
    require_once  '../app/Controller/cliente/excluir.php'; 
?>
<div id="page-content-wrapper">
      
      <div class="page-content inset">
          <div class="row">
          <div class="col-md-12">
              <p class="well lead mt-2">Cadastro de Cliente</p>
                <div class="container">
                  <div class="row"> <!-- div da esquerda -->
                      <!-- Text input CNPJ e Razao Social-->
                      <div class="col-sm-8 contact-form"> <!-- div da direita -->
                      <form id="contact" method="post" class="form" role="form" >
                              
                              <div class="row">
                                  <div class="col-xs-6 col-md-3 form-group">
                                      <label for="codigo_imovel">Nome:</label>
                                      <input type="text" class="form-control" name="nome" id="nome"value="<?php echo $row['nome'];?>" /> 
                                  </div>
  
                                  <div class="col-xs-6 col-md-9 form-group">
                                      <label for="cpf">CPF</label>
                                      <input type="text" class="form-control" name="cpf" id="cpf" readonly value="<?php echo $row['cpf'];?>">
                                  </div>
  
                                   <div class="col-xs-6 col-md-9 form-group">
                                      <label for="logra">Rua</label>
                                      <input type="text" class="form-control" name="rua" id="rua"  value="<?php echo $row['rua'];?>">
                                  </div>
  
                                   <div class="col-xs-4 col-md-3 form-group">
                                      <label for="nume_local">Numero do Local:</label>
                                      <input type="text" class="form-control"  name="num" id="num"  value="<?php echo $row['num'];?>">
                                  </div>
                                  
                              </div> <!-- fim row -->
                              <!-- Text input endereco-->
                              
                              <br> <!--pulando uma linha -->
                              <!-- Text input cidade e estado-->
                              <div class="row">
                                  <div class="col-xs-6 col-md-9 form-group">
                                          <label for="celular">Celular:</label>
                                          <input type="text" class="form-control"  name="cel" id="cel" value="<?php echo $row['cel'];?>">
                                  </div>
                                <div class="col-xs-4 col-md-3 form-group">
                                          <label for="data">Data do Cadastro</label>
                                          <input type="date" class="form-control" name="data" id="data" readonly value="<?php  echo $row['data_cliente']; ?>">
                                </div>
                                 
                              </div>
                              <br />
                                <div class="row">
                                  <div class="col-xs-12 col-md-12 form-group">
                                     
                                      <button name="editarCliente" type="submit" class="btn btn-success" value="editar">EDITAR</button>
                                    
                                      <button name="excluirCliente" type="submit" class="btn btn-danger" value="excluir">EXCLUIR</button>
                                      
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
<?php require_once 'footer.php';?>   