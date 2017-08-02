<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>
	<?php 
		$dirs = array_filter(glob('*'), 'is_dir');
		echo "<h3>Lista de Pastas</h3>";
		foreach ($dirs as $key) {
			echo '<div><strong>' . DIRECTORY_SEPARATOR . $key . '</strong></div>';
		}
	?>

	<form style="margin-top: 30px;" method="POST" action="set-excluir.php">
		<input type="text" name="nome" placeholder="Nome da pasta">
		<input type="submit" name="excluir" value="Excluir">
	</form>
	<h3><a href="index.php">Voltar</a></h3>
</body>
</html>