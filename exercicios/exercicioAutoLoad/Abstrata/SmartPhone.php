<?php 
	function incluirInterface($nomeInterface)
	{
		if(file_exists(".." . DIRECTORY_SEPARATOR . "Interface" . DIRECTORY_SEPARATOR . $nomeInterface.".php") === true)
		{
			require_once(".." . DIRECTORY_SEPARATOR . "Interface" . DIRECTORY_SEPARATOR . $nomeInterface.".php");
		}
	}
	spl_autoload_register("incluirInterface");

	abstract class SmartPhone implements Celular
	{
		public function novoSmartPhone()
		{
			return array
			(
				'Especificacoes: ' => array
				(
					'Processador: ' => 'OctaCore 1.4Ghz',
					'Tela: ' => '5.5 polegadas',
					'Acessorios: ' => 'Carregador USB',
					'Leitor de Digital: ' => 'Sim'
				)
			);
		}

		public function ligar()
		{
			echo "Celular Ligando";
		}

		public function tocarMusica()
		{
			echo "Celular Toca Musica";
		}

		public function executarApp()
		{
			echo "Celular Executa App";
		}
	}
?>