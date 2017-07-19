<?php 

	Class Conn 
	{
		private $conn;
		public function conexao()
		{
			return $this->conn = new PDO("mysql:dbname=dpphp7; host=localhost", "root", "");
		}
	}

 ?>