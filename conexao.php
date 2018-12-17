 <?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "gerenciador";

// Criar conexão

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

// Checar conexão 

if (mysqli_connect_error()) { 
    die ("Falha na conexão com o banco de dados:". mysqli_connect_error ()); 
}
else{
	echo "Conectado";
}

?>
