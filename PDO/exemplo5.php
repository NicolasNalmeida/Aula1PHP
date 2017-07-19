<?php 

	$conn = new PDO("mysql:host=localhost;dbname=dpphp7", "root", "");

	$conn->beginTransaction();

	$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

	$id = 11;

	$stmt->execute(array($id));

	// $conn->rollback();

	$conn->commit();
	echo "Dados Excluídos com sucesso";

 ?>