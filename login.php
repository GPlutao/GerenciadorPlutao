<?php
session_start();

$conexao = new mysqli("localhost", "root", "", "gerenciador");



if ($conexao -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";
}
else {

	if (isset($_POST["email"])){
		$email = $_POST["email"];
	}else{
		$email = "erro no email";
	}
	
	if (isset($_POST["senha"])){
		$senha = $_POST["senha"];
	}else{
		$senha = "erro na senha";
	}
	
	//echo $email;
	//echo $senha;

	$aluno = "SELECT email_aluno FROM aluno WHERE email_aluno = '$email' AND senha_aluno = '$senha'";
	$prof = "SELECT email_prof FROM professores WHERE email_prof = '$email' AND senha_prof = '$senha'";

	$resultado = mysqli_query($conexao, $aluno);

	$row = mysqli_num_rows($resultado);

	if($row == 1){ 
		$_SESSION['email'] = $email;
		header('Location: aluno.php');
		exit();
	}else{
		$resultado = mysqli_query($conexao, $prof);
		$row = mysqli_num_rows($resultado);
		if($row == 1){ 
			$_SESSION['email'] = $email;
			header('Location: professor.php');
			exit();
		}else{
			$_SESSION['nao_autenticado'] = true;
			echo "<script>alert('Usuário inexistente ou email ou senha incorreta!');</script>";
			header('Location: index.html');
			exit();  
		}
	}
}
?>
