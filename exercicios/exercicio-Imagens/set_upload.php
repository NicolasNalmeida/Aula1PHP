<?php 
	require_once("Upload.php");

	$file = $_FILES["fileUpload"];

	$upload = new Upload();

	$upload->fazerUpload($file);
?>