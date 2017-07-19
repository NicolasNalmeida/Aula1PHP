<?php 

	require_once("config.php");

	$connection = new Conn();
	$connection->conexao();

	$crud = new Crud();

	// $insert = $crud->Insert();
	// $delete = $crud->Delete();
	// $update = $crud->Update();
	$select = $crud->Select();

 ?>