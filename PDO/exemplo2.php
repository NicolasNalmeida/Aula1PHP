<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dpphp7", "root", "");

	$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

	$login = "EronIldo";
	$password = "9485394854jgj";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);

	if($stmt->execute())
	{
		echo "Os Dados foram inseridos com sucesso";
	}
	else
	{
		echo "deu ruim";
	}

 ?>