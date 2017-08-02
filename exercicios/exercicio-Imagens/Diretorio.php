<?php 

	class Dir
	{
		private $diretorio;
	
	    public function getDiretorio()
	    {
	        return $this->diretorio;
	    }

	    public function setDiretorio($diretorio)
	    {
	        $this->diretorio = $diretorio;
	    }

	    public function criarDir($diretorio)
	    {
	    	$this->setDiretorio($diretorio);
	    	$dir = $this->getDiretorio();

	    	if(!is_dir($dir))
	    	{
	    		mkdir($dir);
	    		echo "<h3>Diretorio " . $dir . " criado com sucesso</h3>";
	    		echo '<h4><a href="page-dir.php">Voltar</a></h4>';
	    	}
	    	else
	    	{
	    		echo "<h3>Diretorio " . $dir . " ja existe</h3>";
	    		echo '<h4><a href="page-dir.php">Voltar</a></h4>';
	    	}
	    }
	}

?>