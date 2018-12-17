<?php

$id_aluno = $_POST['id_aluno'];
$disciplina = $_POST['disciplina'];
$notas = $_POST['notas'];


$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";
}
else {
	$sql = mysql_query("SELECT nome FROM aluno");
	$array = mysql_fetch_array($sql);

	for ($lop = 0; $lop < count($array); $lop++){
		echo ($array[$lop]);
		<html>
		<input type = "checkbox" name = "opcoes" value = "presenca"/>
		</html>
	}

	$.get("professor.html");

	$conectar -> query();


	$aluno = "SELECT nome_aluno FROM aluno WHERE matricula_aluno = '$id_aluno'";
	$sql = "SELECT * FROM notas WHERE nome_aluno ='$aluno'";
	echo $sql;
}

?> 