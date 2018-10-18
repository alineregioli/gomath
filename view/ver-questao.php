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
					
					
					<h3 class="text-center">0001 - João e Maria  </h3>
					<h5 class="text-center"> Nível 1 </h5>

					<div class="enunciado">
						
					
					<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget mauris non tellus placerat suscipit id ac tortor. Pellentesque eleifend consectetur malesuada. Vivamus et quam ut odio aliquet pellentesque eu nec est. Curabitur quis mauris at nunc volutpat bibendum. Nunc elementum mauris eu scelerisque tempor. Donec vitae accumsan erat. Etiam venenatis eu eros at placerat. Integer feugiat nisl tristique nulla vehicula, vestibulum sagittis libero cursus. Nulla a porttitor quam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum eu tempus sem, vel gravida quam. Aliquam placerat faucibus elit, ac cursus augue tempor et.</p>
					<p>

					Suspendisse malesuada maximus sodales. Aliquam malesuada dui non ultrices facilisis. Donec fringilla in tortor a consectetur. Proin congue justo at risus eleifend pharetra. Etiam euismod aliquet lacus, congue scelerisque massa eleifend nec. Vestibulum condimentum fringilla leo imperdiet scelerisque. Phasellus convallis tellus eget libero tristique, vel sagittis elit consectetur.</p>



					</div>

					<div class="assunto">
						<p> princípio fundamental de contagem </p>
					</div>

					<div>
						
						<div class="custom-control custom-radio">
						  <input type="radio" id="alternativa1" name="alternativa" class="custom-control-input" checked value="1">
						  <label class="custom-control-label" for="alternativa1">texto alternativa 1</label>
						</div>

						<div class="custom-control custom-radio">
						  <input type="radio" id="alternativa2" name="alternativa" class="custom-control-input"  value="2">
						  <label class="custom-control-label" for="alternativa2">texto alternativa 2</label>
						</div>

						<div class="custom-control custom-radio">
						  <input type="radio" id="alternativa3" name="alternativa" class="custom-control-input"  value="3">
						  <label class="custom-control-label" for="alternativa3">texto alternativa 3</label>
						</div>

						<div class="custom-control custom-radio">
						  <input type="radio" id="alternativa4" name="alternativa" class="custom-control-input"  value="4">
						  <label class="custom-control-label" for="alternativa4">texto alternativa 4</label>
						</div>
						

					</div>



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
				</div>
			</div>
		</div>
		<!-- rodapé -->
		<script src="js/ajaxquestoes.js"></script>
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>
