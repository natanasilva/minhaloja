<?php  

	include_once 'connect.php';
	include_once 'functions.php';
	switch ($_GET['action']) {
		case '1':	
			# Gravando PRODUTOS os dados no banco
			$result = insert("products", $_POST);

			if($result){
				header("location: ../produtos.php");
			}else{
				header("location: ../produtos.php?mgs=error");		
			}
			break;
		case '2':
			# Gravando FORNECEDORES os dados no banco
			$result = insert("suppliers", $_POST);

			if($result){
				header("location: ../fornecedores.php");
			}else{
				header("location: ../fornecedores.php?mgs=error");		
			}
			break;
		case '3':
			# Gravando CLIENTES os dados no banco
			$senha = mysqli_real_escape_string($conn, $_POST['users_password']);
			$senha = sha1($senha);
			$_POST['users_password'] = $senha;
			$result = insert("users", $_POST);

			if($result){
				header("location: ../usuario.php");
			}else{
				header("location: ../registrar.php?mgs=error");		
			}
			break;
		default;
			echo "Opção inválida";	

	}

?>