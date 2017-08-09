<?php 
	header("Content-type: image/jpeg");
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 112, 112, 112);

	imagestring($image, 5, 450, 150, utf8_decode("CERTIFICADO DE CUZÃOZISSE"), $titleColor);
	imagestring($image, 5, 440, 350, "Eronilda Carneiro Silva", $titleColor);
	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);


	imagejpeg($image, "certificado-".date("d-m-Y") . ".jpg");
	// imagejpeg($image);

	imagedestroy($image);
?>