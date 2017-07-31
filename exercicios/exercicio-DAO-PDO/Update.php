<?php
	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$editora = $_POST['editora'];
	$autor = $_POST['autor'];

	$crud->setData($nome, $editora, $autor);
	$update = $crud->update($id);
	header('Location:PageUpdate.php');
 ?>