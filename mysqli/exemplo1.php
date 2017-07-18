<?php 

	$conn = new mysqli("localhost", "root", "", "dpphp7");

	if($conn->connect_error)
	{
		echo "Error: " . $conn->connect_error;
	}

	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
	$stmt->bind_param("ss", $login, $pass);

	$login = "nicolas";
	$pass = "1234";

	$stmt->execute();

	$login = "root";
	$pass = "890";

	$stmt->execute();

 ?>