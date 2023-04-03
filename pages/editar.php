<?php  

	include_once 'connect.php';
	include_once 'functions.php';

	switch ($_GET['action']) {
		case '1':
			# editando PRODUTOS os dados no banco
			$filter['id_product'] = $_POST['id_product'];
			$result = update("products", $_POST, $filter);
			if($result){
				header("location: ../produtos.php");
			}else{
				header("location: ../produtos.php?mgs=error");		
			}
				break;
		case '2':
			# editando FORNECEDORES os dados no banco
			$filter['id_suppliers'] = $_POST['id_suppliers'];
			$result = update("suppliers", $_POST, $filter);
			if($result){
				header("location: ../fornecedores.php");
			}else{
				header("location: ../fornecedores.php?mgs=error");		
			}
			break;
		case '3':
			# editando CLIENTES os dados no banco
			$filter['id_client'] = $_POST['id_client'];
			$result = update("clients", $_POST, $filter);
			if($result){
				header("location: ../editarCliente.php");
			}else{
				header("location: ../editarCliente.php?mgs=error");		
			}	
		default;
			echo "Opção inválida";
	}

?>