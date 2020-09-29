<?php
    error_reporting(-1);
    require_once 'index.php';
    require_once '../app/Model/Imovel.class.php';
    require_once '../app/Controller/validacao.php';
    require_once '../app/Controller/imovel/cad.php'; 
?>

<div id="page-content-wrapper">
        <div class="page-content inset">
            <div class="row">
              <div class="col-md-12">
              <p class="well lead">Cadastro de Imovel</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                    <!--linhas de input-->
                    <div class="col-sm-8 contact-form"> <!-- div da direita -->
                        <form id="contact" method="POST" class="form" role="form"  >
                            <div class="row">
                                <div class="col-xs-6 col-md-3 form-group">
                                        <label for="codigo_imovel">Codigo do Imovel:</label>
                                        <input type="number" class="form-control" name="codigo_imovel" id="codigo_imovel" placeholder="codigo"  autofocus/> 
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
                                         <option value="Alugado">Alugado</option>
                                         <option value="Vazio">Vazio</option>
                                         </select>
                                </div>
                            </div><!--fim control-group-->
                            <br> <!--pulando uma linha -->
                            <!-- Text input cidade e estado-->
                            <div class="row">
                                <div class="col-xs-6 col-md-9 form-group">
                                        <label for="bairro">Bairro:</label>
                                        <input type="text" class="form-control" name="bairro" id="bairro" >
                                </div>
                                <div class="col-xs-4 col-md-3 form-group">
                                    <label for="cidade">Cidade:</label>
                                        <input type="text" class="form-control" name="cidade" id="cidade">
                                </div>
                                <div class="col-xs-6 col-md-3 form-group">
                                        <label for="nome_local">Nome do Local:</label>
                                        <input type="text" class="form-control"  name="nome_local" id="nome_local" placeholder="Ex: Rua Getulio Vargas" required>
                                </div>

                                <div class="col-xs-4 col-md-3 form-group">
                                        <label for="numero_local">Numero do Local:</label>
                                        <input type="text" class="form-control" min="1" name="numero_local" id="numero_local" >
                                </div>
                                <div class="col-xs-4 col-md-6 form-group">
                                        <label for="numero_quarto">Numero de Quartos:</label>
                                        <input type="text" class="form-control" name="numero_quarto" id="numero_quarto" >
                                </div>
                            </div><!--informaçao da casa-->
                            <div class="row">
                            <div class="col-xs-8 col-md-3 form-group">
                                <div class="controls">
                                    <label for="numero_banheiro">Banheiros:</label>
                                    <input type="text" class="form-control" name="numero_banheiro" id="numero_banheiro" >
                                </div>
                            </div>

                            <div class="col-xs-6 col-md-3 form-group">
                                 <div class="controls">
                                    <label for="garagem">Vagas na Garagem:</label>
                                    <input type="text" class="form-control" name="garagem" id="garagem"  maxlength="2">
                                    </div>
                             </div>

                            <div class="col-xs-6 col-md-3 form-group">
                                <label for="valor_imovel">Valor do Imovel:</label>
                                    <select class="form-control" name="valor_imovel" id="valor_imovel" >
                                        <option>Ate 60.000</option>
                                        <option>60.000 ate 80.000</option>
                                        <option>80.000 ate 100.000</option>
                                    </select>
                             </div>
                            </div>

                            <br />  

                            <div class="row">
                              <div class="col-xs-12 col-md-12 form-group">
                             
                                <button  type="submit" name="Submit" class="btn btn-primary">CADASTRAR</button>
                              </div>

                              <div class="col-xs-12 col-md-12 form-group">
                                <input type="hidden" class="form-control" name="form_imovel" value="cadastro_imovel">
                                <a href="lista_imovel.php" type="submit" class="btn btn-warning">ALTERAR/EXCLUIR</a>
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
    <?php require_once 'footer.php';?>