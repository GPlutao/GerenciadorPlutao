<?php
session_start();

$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";
}
else{
	if(empty($_POST['login']) or empty($_POST['senha'])) {
		header('Location: login.html');
		exit();
	}

	$login = mysqli_real_escape_string($conexao, $_POST["login"]);
	$senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

	$sql = "SELECT login FROM cliente WHERE login = '$login' and senha = '$senha'";

	$resultado = mysqli_query($conexao, $sql);

	$row = mysqli_num_rows($resultado);

	if($row == 1){ 
		$_SESSION['login'] = $login;
		header('Location: pagina.php');
		exit();
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: login.html');
		exit();
	}
}

?>
