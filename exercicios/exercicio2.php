<?php 

	class Compra
	{
		private $preco;
		private $quantidade;

		// PREÇO
		public function getPreco()
		{
			return $this->preco;
		}

		public function setPreco($preco)
		{
			$this->preco = $preco;
		}

		// QUANTIDADE
		public function getQtde()
		{
			return $this->quantidade;
		}

		public function setQtde($quantidade)
		{
			$this->quantidade = $quantidade;
		}

		// CALCULAR PREÇO

		public function CalcPreco()
		{
			return $this->getPreco() * $this->getQtde();
		}
	}//fim da classe

	$compra = new Compra();
	$compra->setPreco(10);
	$compra->setQtde(2);

	echo $compra->CalcPreco();

 ?>