<?php
	require_once 'Database.class.php';
	class Imovel extends Database
	{
	
		public function cadastrarImovel($codigo_imovel,$tipo,$situcao_atual,$bairro,$cidade,$nome_local,$numero_local,$numero_quarto,$numero_banheiro,$garagem,$valor_imovel)
		{	
			
		 try{

				$stmt = $this->conn->prepare("INSERT INTO bd_imobiliaria (codigo_imovel,tipo,situcao_atual,bairro,cidade,nome_local,numero_local,numero_quarto,numero_banheiro,garagem,valor_imovel) 
				VALUES (:codigo_imovel,:tipo,:situcao_atual,:bairro,:cidade,:nome_local,:numero_local,:numero_quarto,:numero_banheiro,:garagem,:valor_imovel)");
					  $stmt->bindValue(':codigo_imovel', $codigo_imovel, PDO::PARAM_INT);
				      $stmt->bindValue(':tipo', $tipo, PDO::PARAM_STR);
				      $stmt->bindValue(':situcao_atual', $situcao_atual, PDO::PARAM_STR);
				      $stmt->bindValue(':bairro', $bairro, PDO::PARAM_STR);
				      $stmt->bindValue(':cidade', $cidade, PDO::PARAM_STR);
				      $stmt->bindValue(':nome_local', $nome_local, PDO::PARAM_STR);
				      $stmt->bindValue(':numero_local', $numero_local,PDO::PARAM_INT);
				      $stmt->bindValue(':numero_quarto', $numero_quarto,PDO::PARAM_INT);
				      $stmt->bindValue(':numero_banheiro', $numero_banheiro,PDO::PARAM_INT);
				      $stmt->bindValue(':garagem', $garagem,PDO::PARAM_INT);
					  $stmt->bindValue(':valor_imovel', $valor_imovel, PDO::PARAM_STR);	
					  $stmt->execute(); 
					  return true;
					  	 	
			}catch(Exception $e) {
				echo "Erro na hora do cadastro/valor nao encontrado".$e->getMessage();
			} 
		}
		
		public function listarImovel(){
			try {
				$stmt = $this->conn->query("SELECT * From bd_imobiliaria");
                $listar = $stmt->fetchAll(PDO::FETCH_ASSOC);
                return $listar;
			} catch (\Throwable $th) {
				echo "erro na hora de buscar".$th->getMessage();
				
				//throw $th;
			}
		}

		public function buscarID($id)
		{
			$recebeDados = array();
			$stmt = $this->conn->prepare("SELECT * from bd_imobiliaria where id = :id");
			$stmt->bindValue(":id", $id);
			$stmt->execute();

			$recebeDados = $stmt->fetch(PDO::FETCH_ASSOC);
			return $recebeDados;
			
		}

		public function atualizarImovel($id,$codigo_imovel,$tipo,$situcao_atual,$bairro,$cidade,$nome_local,$numero_local,$numero_quarto,$numero_banheiro,$garagem,$valor_imovel)
		{
			try 
			{
				$stmt = $this->conn->prepare("UPDATE bd_imobiliaria SET 
				codigo_imovel = :co, 
				tipo = :t,
				situcao_atual = :si,
				bairro = :b, 
				cidade = :c, 

				nome_local = :r,
			
				numero_local = :n, 
				numero_quarto = :q , 
				numero_banheiro = :b, 
				garagem = :g,
				valor_imovel = :v where id = :id");

				$stmt->bindValue(':id', $id);
				$stmt->bindValue(':co', $codigo_imovel, PDO::PARAM_INT);
				$stmt->bindValue(':t', $tipo,  PDO::PARAM_STR);
				$stmt->bindValue(':si', $situcao_atual, PDO::PARAM_STR);
				$stmt->bindValue(':b', $bairro,  PDO::PARAM_STR);
				$stmt->bindValue(':c', $cidade,  PDO::PARAM_STR);

				$stmt->bindValue(':r', $nome_local, PDO::PARAM_STR);
				$stmt->bindValue(':n', $numero_local, PDO::PARAM_INT);
				$stmt->bindValue(':q', $numero_quarto, PDO::PARAM_INT);
				$stmt->bindValue(':b', $numero_banheiro,PDO::PARAM_INT);
				$stmt->bindValue(':g', $garagem, PDO::PARAM_INT);
				$stmt->bindValue(':v', $valor_imovel, PDO::PARAM_STR);	
				$stmt->execute(); 
				return true;


			} catch (\Throwable $th) {
				echo "deu ruim em atualizar o imovel".$th->getMessage();
			}
		}



		public function deletarImovel($id){
			

			try {
				$stmt = $this->conn->prepare("DELETE from bd_imobiliaria where id = :id");
				$stmt->bindValue(':id', $id);
				$stmt->execute();
			} catch (\Throwable $th) 
			{
				echo "deu ruim com id".$th->getMessage();
			}
		}


	}
