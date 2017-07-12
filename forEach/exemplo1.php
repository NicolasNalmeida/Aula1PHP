<?php 
	header('Content-type: text/html; charset=utf-8');
	$meses = array(
			"Janeiro",
			"Fevereiro",
			"Março",
			"Abril",
			"Maio",
			"Junho",
			"Julho",
			"Agosto",
			"Setembro",
			"Outubro",
			"Novembro",
			"Dezembro"
		);

	foreach ($meses as $index => $mes) {
		echo "Indice: " . $index . "<br>";
		echo "O mês é: " . $mes . "<br><br>";
	}

?>