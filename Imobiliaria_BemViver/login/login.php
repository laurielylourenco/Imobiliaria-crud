
<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$numero = isset($_POST['numero']) ? $_POST['numero'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($numero) || empty($password))
{
    echo "Informe numero e senha";
    exit;
}
 
// cria o hash da senha
$passwordHash = make_hash($password);
 
$PDO = db_connect();
 
$sql = "SELECT numero FROM funcionario WHERE numero = :numero AND password = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':numero', $numero);
$stmt->bindParam(':password', $passwordHash);

 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 

// pega o primeiro usuário
//$user = $users[0];


if($users) {
	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $user['id'];
	$_SESSION['user_name'] = $user['name'];
	 
	header('Location: panel.php');
} else {
	//echo $passwordHash;
	//print_r($users);
	echo "Usuário ou senha inválidos!";
}

?>
<!doctype html>
