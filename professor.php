<?php
include('verifica.php');
?>

<html>
	<head>
		<title>GERENCIADOR</title>
		<meta charset = "utf-8">
		<link  rel="stylesheet" type="text/css" href="css_gerenciador.css">
	</head>
	<body>
		<h1>Gerenciador</h1>
		<!--Menu-->
		<ul>
			<li><h2>Olá, <?php echo $_SESSION['email'];?></h2></li>
			<li style="float:right"><a href="logout.php">Sair</a>></li>
			<li style="float:right"><a href="ajuda.html">Ajuda</a></li>
		</ul><br><br>

		<h3>FREQUÊNCIA</h3>
		<form name="professor" action="professor.php" method="POST">
			<label>Id do professor:</label>
				<input type="text" name="id_prof" size="45"><br>

			<label>Data da aula:</label>
				<input type="text" name="data" size="45"><br>	

			<label>Quantidade de horas/aulas:</label>
				<input type="text" name="quantidade" size="45"><br>
			
			<label>Conteúdo da aula:</label>
				<input type="text" name="conteudo" size="45"><br>
			
			<label>Selecione a turma:</label>
				<input type="text" name="turma" size="45"><br>

			<label>Selecione a disciplina:</label>
				<input type="text" name="disciplina" size="45"><br>

			<input type="submit" name="frequencia" value="Iniciar Chamada">
		</form><br>
		
		<h3>NOTAS</h3>	
		<form name="professor" action="professor.php" method="POST">

			<label>Selecione a disciplina:</label>
				<input type="text" name="disciplina" size="45"><br>	

			<label>Selecione a turma:</label>
				<input type="text" name="turma" size="45"><br>

			<label>Digite o id do aluno:</label>
				<input type="text" name="turma" size="45"><br>
		
			<label>Observações sobre a nota:</label>
			<select id=obs>
			    <option value="" >...</option>
			    <option value="nota_bimestre_1" >1°Bimestre</option>
			    <option value="nota_bimestre_2" >2°Bimestre</option>
			    <option value="nota_bimestre_3" >3°Bimestre</option>
			    <option value="nota_bimestre_4" >4°Bimestre</option>
			    <option value="recuperacao" >Recuperação</option>
			    <option value="nota_final" >Nota Final</option>
			</select>	

			<label>Digite a nota:</label>
				<input type="text" name="nota" size="45"><br>

			<input type="submit" name="notas" value="Inserir Notas">		
		</form>
	</body>
</html>


