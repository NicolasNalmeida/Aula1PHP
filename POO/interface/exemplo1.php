<?php 

	interface Veiculo
	{
		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo
	{
		public function acelerar($velocidade)
		{
			echo "Acelerou ate " . $velocidade . " km/h"; 
		}

		public function frenar($velocidade)
		{
			echo "O veiculo frenou ate " . $velocidade . " km/h";
		}

		public function trocarMarcha($marcha)
		{
			echo "O veiculo engatou a marcha " . $marcha;
		}
	}

	$carro = new Civic();
	$carro->trocarMarcha(1);
	echo "<br>";
	$carro->frenar(10);
	echo "<br>";
	$carro->acelerar(100);
 ?>