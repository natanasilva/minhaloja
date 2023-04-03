<?php  

	# Variáveis de inicialização
	$host = "localhost";
	$user = "root";
	$pass = "";
	$database = "minha_loja";


	# Fazer a conexão com o banco de dados
	$conn = mysqli_connect($host, $user, $pass, $database) or die(mysqli_connect_error());


?>