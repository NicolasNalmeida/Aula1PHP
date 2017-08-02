<?php 

	require_once("Excluir.php");

	$exc = new ExcluirDir();

	$nomeDir = $_POST["nome"];

	$exc->excluir($nomeDir);

?>