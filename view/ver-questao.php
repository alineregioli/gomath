<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Ver questão</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 4-->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
		
		
		<?php
			$matches = array();
			preg_match('([0-9]+)', $_SERVER['REQUEST_URI'], $matches);
			require_once('header.php');
		 ?>

		 <?php
			if(!isset($_SESSION['acesso']) || $_SESSION['acesso'] != 1){//nao é adm = sai
				header('Location: problemas');
			}
		?>

		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					
					
					<h3 class="text-center" id="titulo"></h3>
					<h5 class="text-center" id = "nivel"></h5>

					<div class="enunciado">

					</div>

					<div class="assunto">
						<p></p>
					</div>

					<form class="alternativas" action="control/submissao.php" method="POST">
					

					<input type="hidden" id="idquestao" name="idquestao" value="<?php echo $matches[0];?>">



					<div class="text-center" style="margin-bottom: 10px;">
					  	<div class="row">
					  		<div class="col-md-2"></div>
					  		<div class="col-md-3">
					  			<a href="questoes" class="btn btn-primary"> CANCELAR</a>
					  		</div>
					  		<div class="col-md-2"></div>
					  		<div class="col-md-3">
					  			<button type="submit" class="btn btn-primary ">Submeter</button>
					  		</div>
					  		<div class="col-md-2"></div>

					  	</div>
					  
					</div>
					</form>
				</div>
			</div>
		</div>
		<script src="js/ajaxquestao.js"></script>