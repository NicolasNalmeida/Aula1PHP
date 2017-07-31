<?php 
	require_once "config.php";
	$conn = new Sql();
	$crud = new Livro();

	if (isset($_POST['nome']))
	{
		$nome = $_POST['nome'];
		$editora = $_POST['editora'];
		$autor = $_POST['autor'];

		$crud->setData($nome, $editora, $autor);
	}
	
	if(empty($nome) || empty($editora) || empty($autor))
	{
		echo "<h2> CAMPS VAZIOS </h2>";
	}
	else
	{
		$insert = $crud->insert();
		header("Location:PageInsert.php");
	}
 ?>