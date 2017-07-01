<?php 

	function teste($callback)
	{
		// PROCESSL LENTO
		$callback();
	} 

	teste(function()
	{
		echo "<h1>Terminou</h1>";
	});
 ?>