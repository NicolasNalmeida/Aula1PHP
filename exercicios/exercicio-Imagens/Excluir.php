<?php 

	class ExcluirDir
	{
		private $nomeDir;
	
	    public function getNomeDir()
	    {
	        return $this->nomeDir;
	    }

	    public function setNomeDir($nomeDir)
	    {
	        $this->nomeDir = $nomeDir;
	    }

	    public function excluir($nomeDir)
	    {
	    	$this->setNomeDir($nomeDir);

	    	$nome = $this->getNomeDir();
	    	
	    	if(is_dir($nome))
	    	{
	    		rmdir($nome);
	    		echo '<h3 style="color: red;"> Arquivo ' . $nome . ' foi REMOVIDO</h3>';
	    		echo '<h3><a href="page-delete.php">Voltar</a></h3>';
	    	}
	    	else
	    	{
	    		echo '<h3 style="color: red;"> Arquivo ' . $nome . ' não existe</h3>';
	    		echo '<h3><a href="page-delete.php">Voltar</a></h3>';
	    	}
	    }
	}

?>