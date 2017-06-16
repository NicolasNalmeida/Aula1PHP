<?php 

	$condition = true;

	while ($condition)
	{
		$numero = rand(1, 100);

		if ($numero === 3)
		{
			echo "TRÊS!!!";
			$condition = false;
		}
		else
		{
			echo $numero . " ";
		}
	}

 ?>