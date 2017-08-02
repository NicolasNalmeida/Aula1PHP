<?php

	require_once("Diretorio.php");

	$dir = new Dir();
	$nomeDir = $_POST["nome"];
	$dir->criarDir($nomeDir);

?>