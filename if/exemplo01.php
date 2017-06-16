<?php 
	$qualAsuaIdade = 80;
	$idadeCrianca = 12;
	$idadeMaior = 18;
	$idadeMelhor = 65;

	if($qualAsuaIdade < $idadeCrianca)
	{
		echo "Você é uma criança";
	}
	else if($qualAsuaIdade < $idadeMaior)
	{
		echo "Adolescente";
	}
	else if($qualAsuaIdade < $idadeMelhor)
	{
		echo "Adulto";
	}
	else
	{
		echo "Idoso";
	}
	echo "<br>";

	echo ($qualAsuaIdade < $idadeMaior) ? "Menor de Idade" : "Maior de Idade";

 ?>