<!DOCTYPE html>
<html>
<head>
	<title>
		Update
	</title>
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
		<form method="post" action="Update.php">
			<span>Escolha um Livro pelo COD: </span><input type="number" name="id" placeholder="Codigo do Livro"><br>
			<span>Nome do Livro: </span><input type="text" name="nome" placeholder="Nome"><br>
			<span>Nome da Editora: </span><input type="text" name="editora" placeholder="Editora"><br>
			<span>Nome do Autor: </span><input type="text" name="autor" placeholder="Autor"><br><br>
			<input type="submit" name="enviar" value="Atualizar">
		</form>
		
		<h3><a href="index.php">Voltar</a></h3>
		<br>
		<br>
		<br>
	</div>
</body>
</html>