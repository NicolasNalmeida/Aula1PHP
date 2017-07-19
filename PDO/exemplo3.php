<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dpphp7", "root", "");

	$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN , dessenha = :PASSWORD WHERE idusuario = :ID");

	$login = "NicolasAlmeida";
	$password = "3454756768";
	$id = 13;


	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);

	$stmt->execute();
	
	echo "Dados Alterados";

 ?>