<?php 

	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();

	$searchName = $_GET['nome'];

	if(empty($searchName))
	{
		echo "Insira um nome válido";
	}
	else
	{
		$selectName = $crud->selectByName($searchName);
	
		foreach ($selectName as $linha) {
			echo '<ul>';
			foreach ($linha as $key => $value) {
				echo '<li>' . $key . ': ' . $value . '</li>';
			}
			echo '</ul>';
		}
	}
?>