<?php		
$id_aluno = $_POST['id_prof'];
$turma = $_POST['turma'];
$disciplina = $_POST['disciplina'];
$obs = $_POST['obs'];
$nota = $_POST['nota'];

$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='professor.html';</script>";
}else {
	$aluno = "SELECT nome_aluno FROM aluno WHERE matricula_aluno = '$id_aluno'";
	$sql = "INSERT INTO notas (nome_aluno, id_turma, disciplina,'$obs') VALUES ('$aluno', '$turmaAluno', '$disciplina','$nota')";
}
?>