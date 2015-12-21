<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<title>Think a bit<?= isset($_POST['title']) ? " &raquo; " . $_POST['title'] : "" ?></title>
		<link href="./media/css/icons.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link href="./media/css/site.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<nav id="responsive-nav">
			<ul>
				<li><a href="./">Home</a></li>
				<li><a href="./thinkabit/sobre-nos.php">Think a bit</a></li>
				<li><a href="./#portfolio">Portfolio</a></li>
				<li><a href="./#services">Serviços</a></li>
				<li><a href="./contato.php">Contato</a></li>
			</ul>
			<div id="responsive-user-options">
				<a href="#">Registre-se</a>
				<a class="register" href="#">Entrar</a>
			</div>
		</nav>
		<button id="responsive-nav-trigger">
			<div class="glyphicon glyphicon-menu-hamburger"></div>
		</button>
		<div id="overlay"></div>
		<header id="page-header" class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-md-12">
					<a href="./" id="logo">Think a bit</a>
				</div>
				<div class="col-lg-6">
					<nav id="header-nav">
						<a href="./">Home</a>
						<a href="./thinkabit/sobre-nos.php">Think a bit</a>
						<a href="./#portfolio">Portfolio</a>
						<a href="./#services">Serviços</a>
						<a href="./contato.php">Contato</a>
					</nav>
				</div>
				<div class="col-lg-3">
					<div id="user-options">
						<ul>
							<li><a href="#">Registre-se</a></li>
							<li><a class="register" href="#">Entrar</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>