<?php 

	require_once("config.php");

	use Cliente\Cadastro;

	$cad = new Cadastro();
	$cad->setNome("Nicolas de Almeida");
	$cad->setEmail("nicolas.anascimento@gmail.com");
	$cad->setSenha("123456");

	$cad->registrarVenda();
 ?>