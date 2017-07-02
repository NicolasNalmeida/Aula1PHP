<?php 

	class Pessoa	//Classe
	{
		public $nome;	//Atributo

		public function falar()		//Método
		{
			return "O meu nome é ".$this->nome;
		}
	}

	$nicolas = new Pessoa();

	$nicolas->nome = "Nicolas de Almeida";

	echo $nicolas->falar();

 ?>