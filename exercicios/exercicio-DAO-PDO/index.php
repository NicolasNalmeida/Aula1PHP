<!DOCTYPE html>
<html>
<head>
	<title>
		home
	</title>
	<style type="text/css">
		*
		{
			box-sizing: border-box;
		}

		.container
		{
			margin: 0 auto;
			width: 1140px;
		}

		.menu-list
		{
			text-align: center;
			list-style: none;
			overflow: auto;
			padding-left: 0;
		}

		.link-menu
		{
			color: #fff;
			text-align: none;
		}

		.link-menu:focus
		{
			color: #fff;
		}

		.item-list
		{
			width: calc(100% / 5);
			float: left;
			color: #fff;
			
		}

		.content-menu
		{
			background-color: #333;
			padding: 30px;
			border-right: 1px solid #fff;
			transition: 0.3s;
		}

		.content-menu:hover
		{
			background-color: #5e5e5e;
		}

		.item-list::last-child
		{
			border-right: none;
		}
	</style>
</head>
<body>
	<section class="container content">
		<ul class="menu-list">
			<li class="item-list">
				<a class="link-menu" href="PageInsert.php" class="item-link">
					<div class="content-menu">Insert</div>
				</a>
			</li>
			<li class="item-list">
				<a class="link-menu" href="PageSelectAll.php" class="item-link">
					<div class="content-menu">Select All</div>
				 All</a>
			</li>
			<li class="item-list">
				<a class="link-menu" href="PageSelectID.php" class="item-link">
					<div class="content-menu">Select By Id</div>
				 by Id</a>
			</li>
			<li class="item-list">
				<a class="link-menu" href="PageUpdate.php" class="item-link">
					<div class="content-menu">Update</div>
				</a>
			</li>
			<li class="item-list">
				<a class="link-menu" href="PageDelete.php" class="item-link">
					<div class="content-menu">Delete</div>
				</a>
			</li>
		</ul>
	</section>
</body>
</html>