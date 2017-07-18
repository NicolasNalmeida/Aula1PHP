<?php 

	$connection = new mysqli("localhost", "root", "", "bd_exercicio");

	if($connection->connect_error)
	{
		echo "Ocorreu um Erro de Conexão: ERROR " . $connection->connect_error;
	}

	$stmt = $connection->prepare("INSERT INTO tb_livro(nomeLivro, editoraLivro, autorLivro) VALUES(?, ?, ?)");
	$stmt->bind_param("sss", $nomeLivro, $editoraLivro, $autorLivro);

	$nomeLivro = "Assassins Creed: A Cruzada Secreta";
	$editoraLivro = "Editora Galera";
	$autorLivro = "Oliver Bownder";

	if($stmt->execute())
	{
		echo "Insercao Feita com sucesso";
	}
	else
	{
		echo "Erro ao Inserir";
	}

 ?>