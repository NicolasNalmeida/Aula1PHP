<?php 

	interface Veiculo
	{
		public function acelerar($velocidade);
		public function freiar($freiar);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo
	{
		
	}

	$carro = new Civic();

 ?>