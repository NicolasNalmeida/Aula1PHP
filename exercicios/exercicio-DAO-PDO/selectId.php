<style type="text/css">
	.content-list
	{
		border: 3px solid #dcdcdc;
		padding: 30px;
		list-style: none;
	}
</style>

<?php 
	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();

	$id = $_GET['id'];

	if(empty($id))
	{
		echo '<h3 style="color: red;">Código do produto Vazio, inseria um COD valido.</h3>';
		echo '<p><a href="PageSelectId.php">Voltar</a></p>';
	}
	else
	{
		echo '<div style="width: 1140px; margin: 0 auto;">';
			$select = $crud->selectById($id);
			echo '<p><a href="PageSelectId.php">Voltar</a></p>';
		echo '</div>';
	}
?>