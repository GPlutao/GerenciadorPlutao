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
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";}
else {
	$sql = "UPDATE aluno SET nome_aluno = '$nomeAluno', email_aluno = '$emailAluno', senha_aluno = '$senhaAluno', id_turma = '$turmaAluno', idade_aluno = '$idadeAluno', cpf_aluno = '$cpfAluno' WHERE matricula_aluno = '$matriculaAluno'";

	$conectar -> query($sql);
}
?>
