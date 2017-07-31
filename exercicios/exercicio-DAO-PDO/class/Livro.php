<?php
	
	class Livro extends Sql
	{
		private $idLivro;
		private $nomeLivro;
		private $editoraLivro;
		private $autorLivro;

		
	    public function getIdLivro()
	    {
	        return $this->idLivro;
	    }

	    public function setIdLivro($idLivro)
	    {
	        $this->idLivro = $idLivro;
	    }

	    public function getNomeLivro()
	    {
	        return $this->nomeLivro;
	    }

	    public function setNomeLivro($nomeLivro)
	    {
	        $this->nomeLivro = $nomeLivro;
	    }

	    public function getEditoraLivro()
	    {
	        return $this->editoraLivro;
	    }

	    public function setEditoraLivro($editoraLivro)
	    {
	        $this->editoraLivro = $editoraLivro;
	    }

	    public function getAutorLivro()
	    {
	        return $this->autorLivro;
	    }

	    public function setAutorLivro($autorLivro)
	    {
	        $this->autorLivro = $autorLivro;
	    }

	    public function setData($nome, $editora, $autor)
	    {
	    	$this->setNomeLivro($nome);
	    	$this->setEditoraLivro($editora);
	    	$this->setAutorLivro($autor);
	    }


		// CRUD
		public function insert()
		{
			echo "INSERIR <br>";
			$sql = new Sql();
			$sql->query("INSERT INTO tb_livro (nomeLivro, editoraLivro, autorLivro) VALUES (:NOME, :EDITORA, :AUTOR)", array(
				':NOME' => $this->getNomeLivro(),
				':EDITORA' => $this->getEditoraLivro(),
				':AUTOR' => $this->getAutorLivro()
			));
		}

		public function select()
		{
			echo "<h1>SELECIONAR TODOS</h1>";

			$sql = new Sql();
			$stmt = $sql->query("SELECT * FROM tb_livro ORDER BY idLivro ASC");

			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

			echo '<ul class="content-list">';
			foreach ($resultado as $row) {
				foreach ($row as $key => $value) {
					echo '<li class="item-list">' . "<strong>" . $key . "</strong>" . ": " . $value . "</li>";
				}
				echo '<br>';
			}
			echo "</ul>";
		}

		public function selectById($id)
		{
			echo "SELECIONAR POR ID<br>";

			$this->setIdLivro($id);
			$sql = new Sql();
			$stmt = $sql->query("SELECT * FROM tb_livro WHERE idLivro = :ID", array(
				':ID' => $this->getIdLivro(),
			));

			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo '<ul class="content-list">';
			foreach ($resultado as $row) {
				foreach ($row as $key => $value) {
					echo '<li class="item-list">' . "<strong>" . $key . "</strong>" . ": " . $value . "</li>";
				}
			}
			echo "</ul>";

		}

		public function selectByName($nome)
		{
			$this->setNomeLivro($nome);
			$sql = new Sql();
			$stmt = $sql->query("SELECT * FROM tb_livro WHERE nomeLivro LIKE :NOME", array(
				':NOME' => "%" . $this->getNomeLivro() . "%"
			));

			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
			return $resultado;
		}

		public function update($id)
		{
			echo "ATUALIZAR <br>";

			$sql = new Sql();

			$this->setIdLivro($id);

			$stmt = $sql->query("UPDATE tb_livro SET nomeLivro = :NOME, editoraLivro = :EDITORA, autorLivro = :AUTOR WHERE idLivro = :ID", array(
				':ID' => $this->getIdLivro(),
				':NOME' => $this->getNomeLivro(),
				':EDITORA' => $this->getEditoraLivro(),
				':AUTOR' => $this->getAutorLivro()
			));

		}

		public function delete($id)
		{
			echo "DELETAR <br>";

			$sql = new Sql();

			$this->setIdLivro($id);

			$stmt = $sql->query("DELETE FROM tb_livro WHERE idLivro = :ID", array(
				':ID' => $this->getIdLivro()
			));
		}
	
	}