<?php 
	
	$palavra = "mãe";
	$frase = "A repetição é a mãe da retenção";
	$q = strpos($frase, $palavra);
	$texto = substr($frase, 0, $q);
	var_dump($texto);
	echo"<br>";
	$texto = substr($frase, $q + strlen($palavra), strlen($frase));
	var_dump($texto);
 ?>