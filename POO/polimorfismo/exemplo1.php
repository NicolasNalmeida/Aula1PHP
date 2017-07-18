<?php 

	abstract class Animal
	{
		public function falar()
		{
			return "Som";
		}

		public function mover()
		{
			return "Anda";
		}
	}

	class Cachorro extends Animal
	{
		public function falar()					//uso do mesmo método "falar" da classe abstrata Animal = Polimorfismo
		{
			return "Late";
		}
	}

	class Gato extends Animal
	{
		public function falar()
		{
			return "Mia";
		}
	}

	class Passaro extends Animal
	{
		public function falar()
		{
			return "Canta";
		}

		public function mover()
		{
			return "Voa e " . parent::mover();				//há o polimorfismo e com o "parent::mover()" ele aproveita o retorno do método da classe pai
		}
	}

	$pluto = new Cachorro();
	echo $pluto->falar() . "<br>";
	echo $pluto->mover() . "<br>"; 
	echo "-----------------------------<br>";
	$garfield = new Gato();
	echo $garfield->falar() . "<br>";
	echo $garfield->mover() . "<br>";
	echo "-----------------------------<br>";
	$picapau = new Passaro();
	echo $picapau->falar() . "<br>";
	echo $picapau->mover() . "<br>";

 ?>