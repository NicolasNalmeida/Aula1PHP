<?php 

	class Upload
	{
		private $file;
	
	    public function getFile()
	    {
	        return $this->file;
	    }

	    public function setFile($file)
	    {
	        $this->file = $file;
	    }

	    public function fazerUpload($file)
	    {
	    	$this->setFile($file);
	    	$arquivo = $this->getFile();

	    	$folder = "images";


	    	if(!is_dir($folder))
	    	{
	    		mkdir($folder);
	    	}

	    	print_r($arquivo) ;
	    	// move_uploaded_file($arquivo, $folder . DIRECTORY_SEPARATOR);

	    	if(move_uploaded_file($arquivo["tmp_name"], $folder . DIRECTORY_SEPARATOR . $arquivo["name"]))
	    	{
	    		echo "Upload ok";
	    	}
	    	else
	    	{
	    		echo "Erro no Upload";
	    	}
	    }
	}

?>