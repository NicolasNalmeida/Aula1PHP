<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dpphp7", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "Bino";
	$password = "45645646";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	$stmt->execute();
	echo "Os Dados foram inseridos com sucesso";

 ?>