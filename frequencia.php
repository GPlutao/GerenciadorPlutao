<?php		
$id_prof = $_POST['id_prof'];
$data = $_POST['data'];
$qtd_aulas = $_POST['quantidade'];
$conteudo = $_POST['conteudo'];
$turma = $_POST['turma'];
$disciplina = $_POST['disciplina'];

$conectar = new mysqli("localhost", "root", "", "gerenciador");

if ($conectar -> connect_error) {
	echo"<script language='javascript' type='text/javascript'>alert('Falha na conexão com o banco de dados.');window.location.href='professor.html';</script>";
}else {
	$insere_chamada = mysqli_query("INSERT INTO frequencia (matricula_prof,dia_aula,qtd_aulas,id_turma,disciplina,conteudo) VALUES ('$id_prof','$data','$qtd_aulas','$turma','$disciplina','$conteudo')");
		
	if($insere_chamada){
		$lista_query = mysqli_query("SELECT * FROM frequencia");
				
		$consulta_ID = mysqli_query("SELECT nome_aluno FROM aluno WHERE id_turma = $turma");
		$rowID = mysqli_fetch_array($consulta_ID);
					
		while($row = mysqli_fetch_array($lista_query, MYSQL_NUM)){
			$p = $_POST["campo$row[1]"];
			$insere_presenca = mysqli_query("INSERT INTO frequencia (nome_aluno) VALUES ('$row[1]')");
		}
					
		if($insere_presenca){
			echo"<script language='javascript' type='text/javascript'>alert('A sua chamada foi salva com sucesso, tenha uma boa aula!');window.location.href='index.php';</script>";
		}else{
			echo"<script language='javascript' type='text/javascript'>alert('A chamada não pôde ser salva.');window.location.href='index.php';</script>";
		}
	}else{
		echo"<script language='javascript' type='text/javascript'>alert('A chamada não pôde ser salva.');window.location.href='index.php';</script>";
	}
}
?>