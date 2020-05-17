<?php

// instancia objeto PDO, conectando no mysql
	$hostname = 'localhost';
	$username = 'adm';
	$password = 'lourenco';
	$database = 'bd_imobiliaria';
	try {
		$conn = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//	echo 'Conexao efetuada com sucesso!';
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}			

?>