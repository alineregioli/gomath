<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 4-->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		
		<!-- Barra de navegação -->
		<?php 
			session_start();

		 ?>
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container">
				<a class=" gomath " href="0">GoMath</a> <!-- marca -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<?php if(!isset($_SESSION['nome']) || empty($_SESSION['nome'])){ ?>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto mt-auto "> <!-- menu -->
						<li class="nav-item">
							<a class="btn btn-success nav-link " href="entrar">Entrar</a>
						</li>					
					</ul>
				<?php }  
				else{  ?>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav  mt-auto " style="margin-left: 15px;"> <!-- menu -->
						<li class="nav-item">
							<a class="nav-link " href="perfil">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="0">Questões</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="ranking">Ranking</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="conteudo">Conteúdos</a>
						</li>					
					</ul>
					<ul class="navbar-nav ml-auto mt-auto "> <!-- menu -->
						<li class="nav-item">
							<a class="btn btn-danger nav-link " href="sair">Sair</a>
						</li>					
					</ul>
				<?php } ?>

					
				</div>
			</div> <!-- /container -->
		</nav>
		
