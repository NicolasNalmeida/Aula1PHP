<?php 

	$images = scandir("images");

	$data = array();

	foreach ($images as $img) {
		if(!in_array($img, array(".", "..")))
		{
			$filename = "images" . DIRECTORY_SEPARATOR . $img;

			$info = pathinfo($filename);

			$info["size"] = filesize($filename); //tamanho do arquivo em bites
			$info['modificado'] = date('d/m/Y H:i:s', fileatime($filename));
			$info['url'] = 'http://localhost/aulas-php/Aula1PHP/DIR/'.str_replace('\\', '/', $filename);	//Adiciona a informação do diretório e faz a substituição da barra de diretório.

			array_push($data, $info);
		}
	}

	echo json_encode($data);

?>