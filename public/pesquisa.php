<?php

	 //recebemos nosso parâmetro vindo do form
	$parametro = isset($_POST['pesquisaCliente']) ? $_POST['pesquisaCliente'] : null;
	$msg = "";
	//começamos a concatenar nossa tabela
	$msg .="<table class='table table-hover'>";
	$msg .="	<thead>";
	$msg .="		<tr>";		
	$msg .="			<th>Nome:</th>";
	$msg .="			<th>CPF:</th>";
	$msg .="			<th>Rua:</th>";
	$msg .="			<th>Nº do Local:</th>";
	$msg .="			<th>Celular:</th>";
	$msg .="			<th>Data do Cadastro:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once '../app/Model/Busca.class.php';
					try {
						$pdo = new Busca(); 
					
						$resultado = $pdo->buscaDados("SELECT * FROM cliente WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
						$pdo->desconectar();
								
						}catch (PDOException $e){
							echo $e->getMessage();
						}	
						//resgata os dados na tabela
						if(count($resultado)){
							foreach ($resultado as $res) {

	$msg .="				<tr>";
	$msg .="					<td>".$res['nome']."</td>";
	$msg .="					<td>".$res['cpf']."</td>";
	$msg .="					<td>".$res['rua']."</td>";
	$msg .="					<td>".$res['num']."</td>";
	$msg .="					<td>".$res['cel']."</td>";				
	$msg .="					<td>".$res['data_cliente']."</td>";
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