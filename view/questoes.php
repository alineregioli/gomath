<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Questões</title>
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

		<!-- Campo registrar -->
		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					
					<?php
						if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 1){//é administrador
					
						echo '<a class="btn btn-success float-right" href="cadastro-questao" role="button">CADASTRAR PROBLEMA</a>
						
						<br><br>';
						}
					?>

					<table class="table table-striped table-sm table-hover ">
						<thead class="thead-dark">
							
						    <tr>
						      <th scope="col" class="w-20">ID</th>
						      <th scope="col" class="w-10">#</th>
						      <th scope="col" class="w-50">Nome</th>
						      <th scope="col" class="w-10">Assunto</th>
						      <th scope="col" class="w-5">Resolveram</th>
						      <th scope="col" class="w-5">Nível</th>
						    </tr>
						</thead>
						<tbody>
						    <tr>
						      <td>1</td>
						      <td>v</td>
						      <td>Maçã</td>
						      <td>PFC</td>
						      <td>2</td>
						      <td>1</td>
						    </tr>

						    <tr>
						      <td>1</td>
						      <td>v</td>
						      <td>Maçã</td>
						      <td>PFC</td>
						      <td>2</td>
						      <td>1</td>
						    </tr>
						    
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- rodapé -->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>