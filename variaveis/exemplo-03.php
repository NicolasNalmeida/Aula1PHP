<?php 
	// *****TIPOS BÁSICOS DE VARIÁVEIS***** //
	// String
	$nome = "Hcode";
	$site = 'www.hcode.com.br';
	
	// Inteiro
	$ano = 1995;

	// Ponto Flutuante
	$salario = 5500.99;

	// booleano
	$bloqueado = false;

	// *****TIPOS COMPOSTOS ***** //
	// Array
	$frutas = array("abacaxi", "laranja", "manga");
	echo $frutas[1];
	echo "<br>";
	// Objeto
	$nascimento = new DateTime();
	// var_dump($nascimento);

	// *****TIPOS ESPECIAIS ***** //
	$arquivo = fopen("exemplo-03.php", "r");
	var_dump($arquivo);

	$nulo = NULL;
 ?>