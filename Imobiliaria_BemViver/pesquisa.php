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
	$msg .="			<th>logradouro:</th>";
	$msg .="			<th>Nº do Local:</th>";
	$msg .="			<th>Celular:</th>";
	$msg .="			<th>Status:</th>";
	$msg .="			<th>Data do Cadastro:</th>";
	$msg .="		</tr>";
	$msg .="	</thead>";
	$msg .="	<tbody>";
				
				//requerimos a classe de conexão
				require_once('class/conexao.class.php');
					try {
						$pdo = new Conexao(); 
						$resultado = $pdo->select("SELECT * FROM cliente WHERE nome LIKE '$parametro%' ORDER BY nome ASC");
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
	$msg .="					<td>".$res['logra']."</td>";
	$msg .="					<td>".$res['nume_local']."</td>";
	$msg .="					<td>".$res['celular']."</td>";
	$msg .="					<td>".$res['estado']."</td>";
	$msg .="					<td>".$res['data']."</td>";
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