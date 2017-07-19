<style type="text/css">
	body
	{
		width: 1140px;
		margin: 0 auto;
	}
	.list-login
	{
		list-style: none;
		border-bottom: 1px solid;
		padding-bottom: 20px;
		text-align: center;
	}

	.list-login:last-child
	{
		border: none;
	}

	.item-user
	{
		font-size: 18px;
	}

	.strong-data
	{
		font-weight: bold;
	}

	.item-user::first-letter
	{
		text-transform: uppercase;
	}
</style>

<?php 

	class Crud extends Conn
	{

		private $conexao;

		public function Insert()
		{
			$this->conexao = new Conn();
			$conInsert = $this->conexao->conexao();

			$stmt = $conInsert->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :SENHA)");

			$login = "Donald Trump";
			$senha = "Sou_Um_F1Lh0_Da_Puta";

			$stmt->bindParam(":LOGIN", $login);
			$stmt->bindParam(":SENHA", $senha);

			$stmt->execute();

			echo "Inserido";
		}

		public function Delete()
		{
			$this->conexao = new Conn();
			$conDelete = $this->conexao->conexao();

			$stmt = $conDelete->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

			$id = "COLOCAR O ID DE ACORDO COM O BD";

			$stmt->bindParam(":ID", $id);

			$stmt->execute();

			echo "Deletado";
		}

		public function Update()
		{
			$this->conexao = new Conn();
			$conUpdate = $this->conexao->conexao();

			$stmt = $conUpdate->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :SENHA WHERE idusuario = :ID");

			$login = "DonaldTrump";
			$senha = "MakeAmericaGreatAgain";
			$id = 20;

			$stmt->bindParam(":LOGIN", $login);
			$stmt->bindParam(":SENHA", $senha);
			$stmt->bindParam(":ID", $id);

			$stmt->execute();

			echo "Atualizado";
		}

		public function Select()
		{
			$this->conexao = new Conn();
			$conSelect = $this->conexao->conexao();

			$stmt = $conSelect->prepare("SELECT * FROM tb_usuarios ORDER BY idusuario ASC");

			$stmt->execute();

			$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

			echo '<h1>' . 'Logins Recentes' . '</h1>';

			foreach ($resultado as $linha) {
				echo '<ul class="list-login">';
				foreach ($linha as $key => $value) {
					echo '<li class="item-user">' . '<span class="strong-data">' . $key . '</span>' . ': ' . $value . '</li>';
				}
				echo '</ul>';
			}

			echo "Selecionado";
		}
	}

 ?>