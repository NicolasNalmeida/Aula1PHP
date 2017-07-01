<?php 

	$pessoas = array();

	array_push($pessoas, array(
		'Nome'=>'Nicolas',
		'Idade'=>22
	));

	array_push($pessoas, array(
		'Nome'=>'Marcos',
		'Idade'=>17
	));

	echo json_encode($pessoas);

 ?>