<?php 

	require_once "config.php";

	$conn = new Sql();
	$crud = new Livro();

	$code = 1;

	switch ($code) {
		//INSERT
		case 1:
			$nome = "King of Thorns";
			$editora = "Dark Side";
			$autor = "Mark Lawrence";

			$crud->setData($nome, $editora, $autor);

			$insert = $crud->insert();

			break;

		//SELECT
		case 2:
			
			$select = $crud->select();
			break;

		//SELECT BY ID
		case 3:
			$id = 4;
			$select = $crud->selectById($id);
			break;

		//UPDATE
		case 4:
			$id = 3;
			$nome = "Trono de Vidro";
			$editora = "Record";
			$autor = "Sarah J. Mass";

			$crud->setData($nome, $editora, $autor);
			$update = $crud->update($id);

			break;

		//DELETE
		case 5:
			$id = 1;

			$crud->delete($id);
			break;
		
		default:
			echo "codigo invalido";
			break;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
</head>
<body>
	
	<form method="get">
		<div style="display: block;">
			Selecione o codigo:
			<ul class="lista">
				<li class="item">
					<a href="javascript:void(0)" class="link-menu">1</a>
				</li>
				<li class="item">
					<a href="javascript:void(0)" class="link-menu">2</a>
				</li>
				<li class="item">
					<a href="javascript:void(0)" class="link-menu">3</a>
				</li>
				<li class="item">
					<a href="javascript:void(0)" class="link-menu">4</a>
				</li>
				<li class="item">
					<a href="javascript:void(0)" class="link-menu">5</a>
				</li>
			</ul>
		</div>
	</form>
		<div class="inserir">
			<input type="text" name="nome" value="Nome">
			<input type="text" name="editora" value="Editora">
			<input type="text" name="autor" value="Autor">
		</div>
		<div class="select-id">
			<input type="text" name="id" value="Id">
		</div>
		<div class="update">
			<input type="text" name="id" value="Id">
			<input type="text" name="nome" value="Nome">
			<input type="text" name="editora" value="Editora">
			<input type="text" name="autor" value="Autor">
		</div>
		<div class="delete">
			<input type="text" name="id" value="Id">
		</div>

	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('.link-menu').on('click', function(){
				if($(this).text() == 1)
				{
					$('.inserir').removeClass('hidden');
				}
				else if($(this).text() == 2)
				{
					$('.select').removeClass('hidden');
				}
				else if($(this).text() == 3)
				{
					$('.select-de').removeClass('hidden');
				}
				else if($(this).text() == 4)
				{
					$('.update').removeClass('hidden');
				}
				else if($(this).text() == 5)
				{
					$('.delete').removeClass('hidden');
				}
			});

		})
	</script>
</body>
</html>

<style type="text/css">
	.inserir,
	.select-id,
	.update,
	.delete
	{
		margin-top: 30px;
		/*display: none;*/
	}

	/*.hidden
	{
		display: block;
	}*/

	.item
	{
		float: left;
		margin-right: 30px;
		list-style: none;
	}
</style>