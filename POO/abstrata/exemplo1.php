<?php 

	interface Veiculo
	{
		public function acelerar($velocidade);
		public function frenar($velocidade);
		public function trocarMarcha($marcha);
	}

	abstract class Automovel implements Veiculo
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

	class DelRey extends Automovel
	{
		public function empurrar()
		{
			echo "DelRey esta herdado a classe abstrata Automovel para poder ser instanciada<br>";
		}
	}

	$carro = new DelRey();
	$carro->empurrar();
	$carro->frenar(10);
 ?>