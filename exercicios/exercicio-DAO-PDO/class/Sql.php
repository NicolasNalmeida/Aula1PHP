<?php 

	class Sql extends PDO 
	{
		private $conn;

		public function __construct()
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=db_exercicio", "root", "");
		}

		private function setParams($statement, $parameters = array())
		{
			foreach ($parameters as $key => $value) {
				$this->setParam($statement, $key, $value);
			}
		}

		private function setParam($statement, $key, $value)
		{
			$statement->bindParam($key, $value);
		}

		public function query($rawQuery, $params = array())
		{
			$stmt = $this->conn->prepare($rawQuery);

			$this->setParam($stmt, $params);

			$stmt->execute();

			return $stmt;
		}

		public function insert()
		{
			
		}

		public function delete()
		{

		}

		public function update()
		{

		}

		public function select()
		{

		}

	}

