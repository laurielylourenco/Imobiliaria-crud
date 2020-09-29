<!DOCTYPE html>
<html>
<head>
	<title>Imobiliaria</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/css/menu.css">
    <script src="../resources/js/jquery-3.2.1.min.js"></script>
    <script  type="text/javascript" src="../resources/js/busca_imovel.js"></script>      	
</head>
<body>
	<div id="wrapper" class="active">
		 <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
           <li class="sidebar-brand">
           	<a id="menu-toggle" href="#">Menu</a>
           </li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">
          <li>
          	<a href="view_cliente.php">Cliente</a>
          </li>
           <ul class="sidebar-nav" id="sidebar">
              <li>
              <a href="view_imovel.php">Imovel</a>
              </li>

              <li>
              <a href="login.php">Corretores</a>
              </li>
           </ul>
         
          <li><a href="view_buscar_cliente.php">Busca Cliente</a></li>
          <li><a href="view_buscar_imovel.php">Busca Imovel</a></li>
        </ul>
        
    </div>
<div id="page-content-wrapper">
      
      <div class="page-content inset">
          <div class="row">
          <div class="col-md-12">
          <p class="well lead">Busca de informaçao de imovel</p>
              <div class="container">
                <div class="row"> <!-- div da esquerda -->
                      <!-- Text input-->
                    <div class="col-sm-8 contact-form"> 
                      <!-- div da direita -->
                        <form iname="form_pesquisa" id="form_pesquisa" method="post" action="">
                           <div class="input-group center">
  
                            <input type="text" class="form-control" name="pesquisaImovel" id="pesquisaImovel"
                            value="" tabindex="1" placeholder="Pesquisar cliente..." />
  
                                <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                                </button>
                                </div>
                            </div>
                                  <!-- fim row -->
                              <br> <!--pulando uma linha -->
                             
                            <div id="contentLoading">
                              <div id="loading"></div><!--imagem -->
                            </div>                    
                              <!--fim input -->
                            <section>
                              <div id="MostraPesq"></div><!--div mostra os resultados -->
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

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>