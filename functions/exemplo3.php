<?php 

	function ola($texto = "mundo", $periodo = "Bom dia")
	{
		return "ola $texto, $periodo<br>";
	}

	echo ola("mundo");
	echo ola("Nicolas", "Boa Noite");
	echo ola("Pessoal", "Boa Tarde");


	// function ola($texto, $periodo = "Bom dia")
	// {
	// 	return "ola $texto, $periodo<br>";
	// }

	// echo ola();	//vai dar erro por falta de argumento
	// echo ola("mundo");
	// echo ola("Nicolas", "Boa Noite");
	// echo ola("Pessoal", "Boa Tarde");

 ?>