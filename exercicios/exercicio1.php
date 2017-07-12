<?php 
	
	function soma($valor1, $valor2)
	{
		return $valor1 + $valor2;
	}

	$resultado = soma(10, 11);

	echo "Resultado da Soma: $resultado <br>" ;

	if($resultado > 20)
	{
		$resultado += 8;
		echo "A Soma é Maior que 20, Novo Resultado: $resultado";
	}
 ?>