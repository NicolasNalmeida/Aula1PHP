<!DOCTYPE html>
<html>
<head>
	<title>
		Delete
	</title>
	<style type="text/css">
		.container
		{
			width: 1140px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Lista de Livros</h1>
		<?php 
			require_once "config.php";

			$conn = new Sql();
			$crud = new Livro();

			$select = $crud->select();
		 ?>
		<form method="post" action="Delete.php">
			<span>Escolha um Livro pelo COD para excluir: </span><input type="number" name="id" placeholder="Codigo do Livro"><br>
			<input type="submit" name="deletar" value="Deletar">
			<br>
			<h3><a href="index.php">Voltar</a></h3>
			<br>
			<br>
			<br>
		</form>
	</div>
</body>
</html>