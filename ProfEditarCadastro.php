<?php

$matriculaProfessor = $_POST['matriculaProfessor'];
$nomeProfessor = $_POST['nomeProfessor'];
$emailProfessor = $_POST['emailProfessor'];
$senhaProfessor = $_POST['senhaProfessor'];


$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='login.html';</script>";
}
else {
	$sql = "UPDATE professores SET nome_prof = '$nomeProfessor', email_prof = '$emailProfessor', senha_prof = '$senhaProfessor' WHERE matricula_prof = '$matriculaProfessor'";

	$conectar -> query($sql);
}

?>