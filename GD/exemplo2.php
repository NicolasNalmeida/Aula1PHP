<?php 
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$grey = imagecolorallocate($image, 112, 112, 112);

	imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
	imagestring($image, 5, 440, 350, "Nicolas de Almeida", $titleColor);
	imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

	header("Content-type: image/jpeg");

	imagejpeg($image, "certificado-".date("d-m-Y") . ".jpg", 10);

	imagedestroy($image);
?>