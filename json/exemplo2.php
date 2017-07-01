<?php 

	$json = '[{"Nome":"Nicolas","Idade":22},{"Nome":"Marcos","Idade":17}]';

	$data = json_decode($json, true);
	var_dump($data);
 ?>