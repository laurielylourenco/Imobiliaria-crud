<?php
      $imovel = new Imovel();

        if (isset($_POST['form_imovel'])) 
        {
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

           if (!empty($codigo) and !empty($local)) 
           {
                $imovel->cadastrarImovel($codigo,$tipo,$situcao,$bairro,$cidade,$rua,$local,$quartos,$banheiros,$garagem,$preco);
                echo "<script>alert('Imovel cadastrado');
                        window.location='index.php';</script>";
           }else{
               echo "deu ruim esqueceu algo";
           } 
        }