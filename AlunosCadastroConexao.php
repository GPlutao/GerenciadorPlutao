<?php

$matriculaAluno = $_POST['matriculaAluno'];
$nomeAluno = $_POST['nomeAluno'];
$emailAluno = $_POST['emailAluno'];
$senhaAluno = $_POST['senhaAluno'];
$turmaAluno = $_POST['turmaAluno'];
$idadeAluno = $_POST['idadeAluno'];
$cpfAluno = $_POST['cpfAluno'];



$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='cadastrar_aluno.html';</script>";
}
else {
	if ("SELECT * FROM aluno WHERE matricula_aluno = '$matriculaAluno'"){ 
		echo "Esse cadastro já existe.";
	}
	else{
		("INSERT INTO aluno (matricula_aluno, nome_aluno, email_aluno, senha_aluno, id_turma,idade_aluno,cpf_aluno) VALUES ('$matriculaAluno', '$nomeAluno', '$emailAluno','$senhaAluno','$turmaAluno', '$idadeAluno', '$cpfAluno')");
	}
}

?>

