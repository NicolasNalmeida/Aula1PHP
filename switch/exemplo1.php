<?php 

	$diaDaSemana = 8; //date("w");

	switch($diaDaSemana)
	{
		case 0:
			echo "<h3>Domingo</h3>";
			break;
		case 1:
			echo "<h3>Segunda</h3>";
			break;
		case 2:
			echo "<h3>Terça</h3>";
			break;
		case 3:
			echo "<h3>Quarta</h3>";
			break;
		case 4:
			echo "<h3>Quinta</h3>";
			break;
		case 5:
			echo "<h3>Sexta</h3>";
			break;
		case 6:
			echo "<h3>Sábado</h3>";
			break;
		default:
		echo "<h3>Data inválida</h3>";
	}

 ?>