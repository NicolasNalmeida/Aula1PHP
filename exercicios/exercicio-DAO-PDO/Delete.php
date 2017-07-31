<?php 

 	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();
	
	$id = $_POST['id'];

	if(empty($id))
	{
		echo '<h2>Insira um um Codigo para excluir</h2>';
		echo '<h3><a href="PageDelete.php">Voltar</a></h3>';
	}
	else
	{
		$crud->delete($id);

		header('Location:PageDelete.php');
	}

?>