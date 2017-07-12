<?php 

	class Carro
	{
		private $modelo;
		private $motor;
		private $ano;

		// MODELO
		public function getModelo()
		{
			return $this->modelo;
		}

		public function setModelo($modelo)
		{
			$this->modelo = $modelo;
		}

		// MOTOR
		public function getMotor()
		{
			return $this->motor;
		}

		public function setMotor($motor)
		{
			$this->motor = $motor;
		}

		// ANO
		public function getAno()
		{
			return $this->ano;
		}

		public function setAno($ano)
		{
			$this->ano = $ano;
		}

		// Função para exibir informações do carro
		public function exibir()
		{
			return array(
				"modelo"=>$this->getModelo(),
				"motor"=>$this->getMotor(),
				"ano"=>$this->getAno()
			);
		}
	}//fim classe Carro

	$gol = new Carro();
	$gol->setModelo("Gol GT");
	$gol->setMotor(1.6);
	$gol->setAno(2017);

	print_r($gol->exibir());

 ?>