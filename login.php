<?php
session_start();

$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";
}
else {

	$email = mysqli_real_escape_string($conexao, $_POST["email"]);
	$senha = mysqli_real_escape_string($conexao, $_POST["senha"]);

	$aluno = "SELECT email_aluno FROM aluno WHERE email_aluno = '$email' AND senha_aluno = '$senha'";
	$prof = "SELECT email_prof FROM professores WHERE email_prof = '$email' AND senha_prof = '$senha'";

	if ($conectar -> $aluno){
		$resultado = mysqli_query($conexao, $aluno);

		$row = mysqli_num_rows($resultado);

		if($row == 1){ 
			$_SESSION['email'] = $email;
			header('Location: aluno.html');
			exit();
		}
	}elseif ($conectar -> $prof){
		$resultado = mysqli_query($conexao, $prof);

		$row = mysqli_num_rows($resultado);

		if($row == 1){ 
			$_SESSION['email'] = $email;
			header('Location: professor.html');
			exit();
		}
	}else{
		$_SESSION['nao_autenticado'] = true;
		header('Location: login.html');
		exit();  
	}
}
?>
