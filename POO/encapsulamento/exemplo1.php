<?php 

	class Pessoa
	{
		public $nome = "Nicolas de Almeida";
		protected $idade = 22;
		private $senha = "12345";

		public function verDados()
		{
			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}
	}

	$verDados = new Pessoa();
	
	// echo $verDados->nome . "<br>";
	// echo $verDados->senha . "<br>";
	// echo $verDados->idade . "<br>";

	$verDados->verDados();

 ?>