<?php 

	$conn = new PDO("mysql:dbname=dpphp7; host=localhost", "root", "");
	
	$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin DESC");

	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	echo "<ul>";
	foreach ($results as $row) {
		foreach ($row as $key => $value) {
			echo "<li>" . "<strong>" . $key . "</strong>" . ": " . $value . "</li>";
		}

		echo "<br>";
	}
	echo "</ul>";

?>