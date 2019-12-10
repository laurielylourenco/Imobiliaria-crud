<?php
	//recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaImovel']) ? $_POST['pesquisaImovel'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";		
	$msg .="			<th>Codigo</th>";
	$msg .="			<th>Tipo</th>";
	$msg .="			<th>Situcao atual</th>";
	$msg .="			<th>Bairro</th>";
	$msg .="			<th>Cidade</th>";
	$msg .="			<th>Nome do Local</th>";
	$msg .="			<th>Nº do Local:</th>";
	$msg .="			<th>Nº de Quarto:</th>";
	$msg .="			<th>Banheiro</th>";
	$msg .="			<th>Vaga na Garagem</th>";
	$msg .="			<th>Valor do Imovel</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/pesquisaImovel.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM bd_imobiliaria WHERE codigo_imovel LIKE '$parametro%' ORDER BY codigo_imovel ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							foreach ($resultado as $res) {

	$msg .="				<tr>";
	$msg .="					<td>".$res['codigo_imovel']."</td>";
	$msg .="					<td>".$res['tipo']."</td>";
	$msg .="					<td>".$res['situcao_atual']."</td>";
	$msg .="					<td>".$res['bairro']."</td>";
	$msg .="					<td>".$res['cidade']."</td>";
	$msg .="					<td>".$res['nome_local']."</td>";
	$msg .="					<td>".$res['numero_local']."</td>";
	$msg .="					<td>".$res['numero_quarto']."</td>";
	$msg .="					<td>".$res['numero_banheiro']."</td>";
	$msg .="					<td>".$res['garagem']."</td>";
	$msg .="					<td>".$res['valor_imovel']."</td>";
	$msg .="				</tr>";
							}	
						}else{
							$msg = "";
							$msg .="Nenhum resultado foi encontrado...";
						}
	$msg .="	</tbody>";
	$msg .="</table>";
	//retorna a msg concatenada
	echo $msg;
?>