<?php 

	function incluirAbstrata($nomeAbstrata)
	{
		if(file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeAbstrata . ".php"))
		{
			require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeAbstrata . ".php");
		}

		if(file_exists("Interface" . DIRECTORY_SEPARATOR . $nomeAbstrata . ".php"))
		{
			require_once("Interface" . DIRECTORY_SEPARATOR . $nomeAbstrata . ".php");
		}

		if(file_exists($nomeAbstrata) === true)
		{
			require_once($nomeAbstrata);
		}
	}
	spl_autoload_register("incluirAbstrata");

	Class MotoG extends SmartPhone
	{
		public function ligar()
		{
			echo "MogoG liga<br>";
		}

		public function tocarMusica()
		{
			echo "MogoG toca Musica<br>";
		}

		public function executarApp()
		{
			echo "MogoG executa apps<br>";
		}
	}

	$smartPhone = new MotoG();
	$smartPhone->ligar();
	$smartPhone->tocarMusica();
	$smartPhone->executarApp();

	echo "<ul>";
	foreach ($smartPhone->novoSmartPhone() as $valor) {
		foreach ($valor as $key => $value) {
			echo "<li>" . $key . $value . "</li>";
		}
	}
	echo "</ul>";
 ?>