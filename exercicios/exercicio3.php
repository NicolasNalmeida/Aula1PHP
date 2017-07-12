<?php 

	class ListaLivro
	{
		private $nomeLivro;
		private $anoLivro;
		private $autor;
		private $editora;
		private $codLivro;

		public function getNomeLivro()
		{
		    return $this->nomeLivro;
		}

		public function setNomeLivro($nomeLivro)
		{
		    $this->nomeLivro = $nomeLivro;
		}

		public function getAnoLivro()
		{
		    return $this->anoLivro;
		}

		public function setAnoLivro($anoLivro)
		{
		    $this->anoLivro = $anoLivro;
		}

		public function getAutor()
		{
		    return $this->autor;
		}

		public function setAutor($autor)
		{
		    $this->autor = $autor;
		}

		public function getEditora()
		{
		    return $this->editora;
		}

		public function setEditora($editora)
		{
		    $this->editora = $editora;
		}

		public function getCodLivro()
		{
			return $this->codLivro;
		}

		public function setCodLivro($codLivro)
		{
			$this->codLivro = $codLivro;
		}

		// Adicionar Livro
		public function AdicionarLivro()
		{
			
		}
		// Exibir Info do Livro
		public function ExibirLivro()
		{
			return array(
				'Nome do Livro' => $this->getNomeLivro(),
				'Ano do Livro' => $this->getAnoLivro(),
				'Autor do Livro' => $this->getAutor(),
				'Editora' => $this->getEditora(),
				'Cod do Livro' => $this->getCodLivro()
			);
		}
	}

	$addLivro = new ListaLivro();
	$addLivro->setNomeLivro()

	

 ?>