<!DOCTYPE html>
<html>
<head>
	<title>
		Select Name
	</title>
	<style type="text/css">
		.container
		{
			margin: 0 auto;
			width: 1140px;
		}

		tbody
		{
			margin: 20px; 
			display: block;
			border: 4px #dcdcdc solid;
			border-bottom-right-radius: 20px;
			border-top-left-radius: 20px;
			padding: 5px;
			float: left;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Selecionar pelo Nome do Livro</h1>
		<form method="get" >
			<input type="text" name="nome" placeholder="Pesquisar">
			<input type="submit" name="enviar" value="pesquisar">
		</form>
		<?php 

			require_once "config.php";

			$conn = new Sql();
			$crud = new Livro();

			if(empty($_GET['nome']))
			{
				$searchName = '';
			}
			else
			{
				$searchName = $_GET['nome'];
				$selectName = $crud->selectByName($searchName);
				
				echo "<table>";
				foreach ($selectName as $linha) {
					echo '<tbody>';
					foreach ($linha as $key => $value) {
						echo '<tr>';
							echo '<td>' . $key . ': ' . $value . '</td>';
						echo '</tr>';
					}
					echo "</tbody>";
				}
				echo "</table>";
			}
		?>
		<h3><a href="index.php">Voltar</a></h3>
	</div>
</body>
</html>