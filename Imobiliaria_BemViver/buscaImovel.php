
<!DOCTYPE html>
<html>
    <head>
    	<title>Busca</title>
    	   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    	<link rel="stylesheet" href="cor.css" />
      <script type="text/javascript" src="movi.js"></script>
      <script src="login/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function()
        {
          //Aqui a ativa a imagem de load
          function loading_show(){
          $('#loading').html("<img src='img/loading.gif'/>").fadeIn('fast');
        }
          
          //Aqui desativa a imagem de loading
          function loading_hide(){
              $('#loading').fadeOut('fast');
          }       
           
          // aqui a função ajax que busca os dados em outra pagina do tipo html, não é json
          function load_dados(valores, page, div)
          {
              $.ajax
                  ({
                      type: 'POST',
                      dataType: 'html',
                      url: page,
                      beforeSend: function(){//chama o loading antes do carregamento
                        loading_show();
              },
                      data: valores,
                      success: function(msg)
                      {
                          loading_hide();
                          var data = msg;
                    $(div).html(data).fadeIn();       
                      }
                  });
          }
          
          // chama o metodo de load pela primeira vez sem parametros para pode exibir todos
          load_dados(null, 'pesquisa_imovel.php', '#MostraPesq');
          
          
          // o evento key up para começar a pesquisar, se valor for maior q 0 ele faz a pesquisa
          $('#pesquisaImovel').keyup(function(){
              
              var valores = $('#form_pesquisa').serialize()
              //o serialize retorna uma string pronta para ser enviada
              
              //pegando o valor do campo #pesquisaImovel
              var $parametro = $(this).val();
              
              if($parametro.length >= 1)
              {
                  load_dados(valores, 'pesquisa_imovel.php', '#MostraPesq');
              }else
              {
                  load_dados(null, 'pesquisa_imovel.php', '#MostraPesq');
              }
          });
      });
  </script> 
   </head>

<body>
<div id="wrapper" class="active">  
    <!-- Sidebar --><!-- Sidebar -->
    <?php require_once 'menu.php'; ?>
          
     
    <div id="page-content-wrapper">
      
    <div class="page-content inset">
        <div class="row">
        <div class="col-md-12">
        <p class="well lead">Informaçoes do sistema sobre imovel</p>
            <div class="container">
              <div class="row"> <!-- div da esquerda -->
                    <!-- Text input-->
                  <div class="col-sm-8 contact-form"> 
                    <!-- div da direita -->
                      <form iname="form_pesquisa" id="form_pesquisa" method="post" action="">
                         <div class="input-group center">

                          <input type="text" class="form-control" name="pesquisaImovel" id="pesquisaImovel"
                          value="" tabindex="1" placeholder="Pesquisar Imovel..." />

                              <div class="input-group-btn">
                              <button class="btn btn-default" type="submit">
                              <i class="glyphicon glyphicon-search"></i>
                              </button>
                              </div>
                          </div>
                                <!-- fim row -->
                            <br> <!--pulando uma linha -->
                           
                          <div id="contentLoading">
                            <div id="loading"></div><!--a imagem -->
                          </div>                    
                            <!--fim input -->
                          <section>
                            <div id="MostraPesq"></div><!--aqui a div mostra resultados -->
                          </section>

                            
                        </form>
                         </div>
                 <!-- fim div da direita -->
                </div> <!-- fim div da esquerda -->
            </div>
             
            </div>
          </div>
        </div>
    </div>
      

</body>
</html>

