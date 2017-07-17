<?php 

	abstract class FormasGeometricas
	{
		public function quadrado($lado)
		{
			return pow($lado, 2);
		}

		public function retangulo($ladoA, $ladoB)
		{
			return $ladoA * $ladoB;
		}

		public function triangulo($base, $altura)
		{
			return ($base * $altura)/2;
		}
	}

	class MostarFormas extends FormasGeometricas
	{
		
	}

	$objeto = new MostarFormas();
	$quadrado = $objeto->quadrado(10);
	$retangulo = $objeto->triangulo()

	echo "A area do quadrado eh: ". $quadrado;
 ?>