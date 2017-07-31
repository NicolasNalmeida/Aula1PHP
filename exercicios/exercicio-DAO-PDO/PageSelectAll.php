<!DOCTYPE html>
<html>
<head>
	<title>
		Select
	</title>

	<style type="text/css">
		.container
		{
			width: 1140px;
			margin: 0 auto;
		}

		.content-list
		{
			padding-top: 20px;
			border: 2px solid #dcdcdc;
			list-style: none;
		}

	</style>
</head>
<body>
	<div class="container">
		<form method="get" action="Select.php">
		</form>
		<?php 
			require_once "config.php";

			$conn = new Sql();
			$crud = new Livro();

			$select = $crud->select();
		 ?>
		 <p><a href="index.php">Voltar</a></p>
	</div>
</body>
</html>