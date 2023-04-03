<?php

include_once 'connect.php';
include_once 'functions.php';

if (isset($_POST['id_product'])) {
	# Gravando os dados no banco
	$filter['id_product'] = $_POST['id_product'];

	$result = delete("products", $filter);

	if ($result) {
		header("location: ../listaProdutos.php");
	} else {
		header("location: ../cadastroProduto.php?mgs=error");
	}
}

if (isset($_POST['id_suppliers'])) {
	# Gravando os dados no banco
	$filter['id_suppliers'] = $_POST['id_suppliers'];

	$result = delete("suppliers", $filter);

	if ($result) {
		header("location: ../fornecedores.php");
	} else {
		header("location: ../fornecedores.php?mgs=error");
	}
}


if (isset($_POST['id_client'])) {
	# Gravando os dados no banco
	$filter['id_client'] = $_POST['id_client'];

	$result = delete("client", $filter);

	if ($result) {
		header("location: ../minhaConta.php");
	} else {
		header("location: ../cliente.php?mgs=error");
	}
}



?>
