<?php  
    if(isset($_POST['codigo_imovel']) )
    {

         if(isset($_GET['id']) && !empty($_GET['id']))
        {
            $id = $_GET['id'];
            $codigo = $_POST['codigo_imovel'];
            $tipo = $_POST['tipo'];
            $situcao = $_POST['situcao_atual'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $rua = $_POST['nome_local'];
            $local = $_POST['numero_local'];
            $quartos = $_POST['numero_quarto'];
            $banheiros = $_POST['numero_banheiro']; 
            $garagem = $_POST['garagem'];
            $preco = $_POST['valor_imovel'];
                     
            if (!empty($codigo) && !empty($garagem) && !empty($rua)) 
	 		{
	 			$imovel->atualizarImovel($id,$codigo,$tipo,$situcao,$bairro,$cidade,$rua,$local,$quartos,$banheiros,$garagem,$preco);
                 echo "<script>alert('tarefa excluida com sucesso!');
                 window.location='view_imovel.php';</script>";

            
	 		}else{
                 echo "nao atualizou";
             }
 
   
        } 
    } 
