<?php

// LOCALHOST
//$host = "localhost";
$host = "192.168.1.254";
$usuario = "lpadilha";
$senha = "16947";
$banco = "db_lpadilha";

// CONEXAO
$conn = mysqli_connect($host, $usuario, $senha, $banco);

// VERIFICA CONEXAO
if($conn){	
	printf("<br>Parabéns!!! Conexão com o banco de dados MySQL realizada com SUCESSO!");
} else {
	printf("<br>Falha na conexão com banco de dados: %s\n", mysqli_connect_error());
	exit();
}
?>
