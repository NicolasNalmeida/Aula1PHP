<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.voltar a
		{
			text-decoration: none;
			color: #333;
			font-weight: bold;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<form method="post" action="Inserir.php">
		<input type="text" name="nome" placeholder="Nome">
		<input type="text" name="editora" placeholder="Editora">
		<input type="text" name="autor" placeholder="Autor">
		<input type="submit" name="enviar" value="Inserir">
	</form>
	<p class="voltar"><a href="index.php">Voltar</a></p>

	<?php
		require_once "config.php";

		$conn = new Sql();
		$crud = new Livro();

		$select = $crud->select();
	?>
</body>
</html>