<?php 

	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();

	$code = 3;

	switch ($code) {
		//INSERT
		// case 1:
		// 	$nome = "King of Thorns";
		// 	$editora = "Dark Side";
		// 	$autor = "Mark Lawrence";

		// 	$crud->setData($nome, $editora, $autor);

		// 	$insert = $crud->insert();

		// 	break;

		//SELECT
		case 2:
			
			// $select = $crud->select();
			// break;

		//SELECT BY ID
		case 3:
			// $id = $_GET['id'];
			// $select = $crud->selectById($id);
			// break;

		//UPDATE
		case 4:
			$id = 3;
			$nome = "Trono de Vidro";
			$editora = "Record";
			$autor = "Sarah J. Mass";

			$crud->setData($nome, $editora, $autor);
			$update = $crud->update($id);

			break;

		//DELETE
		case 5:
			$id = 1;

			$crud->delete($id);
			break;
		
		default:
			echo "codigo invalido";
			break;
	}
?>