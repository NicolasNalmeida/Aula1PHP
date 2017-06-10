<?php 
	$nome = "Nicolas";

	function teste()
	{
		global $nome;
		echo "Teste 1: ".$nome;
	}

	function teste2()
	{
		echo"<br>";
		// global $nome;
		$nome = "Marcos";
		echo "Agora no Teste 2 ".$nome;
	}

	teste();
	teste2();
?>