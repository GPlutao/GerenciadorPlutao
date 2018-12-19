<?php
//session_start();
include('verifica.php');

//fazer consulta sql
//select * from aluno where email = SESSION["email"]
//echo $_SESSION['email'];

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
				
		<h3>VEJA AQUI SUAS NOTAS</h3>	
		<form name="aluno" action="aluno.php" method="POST">
			<label>Id do aluno:</label><br>
				<input type="text" name="id_aluno" size="45"><br>

			<label>Selecione a disciplina:</label><br>
				<input type="text" name="disciplina" size="45"><br><br>	
			
			<input type="submit" name="notas" value="Ver notas">
		</form>
		
	</body>
</html>