<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Home</title>
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
		<div class="container" style="background:transparent;">
			<div class="row">

				<div class="col-md-6 centro" >
					<form action="control/cadastrar.php" method="POST" >
						<div class="form-group">
							<label for="nome-completo" class="mb-0 mt-5">Nome completo</label>
							<input type="text" class="form-control" id="nome-completo" name="nome-completo" placeholder="Maria da Silva">
						</div>
						<div class="form-group">
							<label for="email" class="mb-0">Email</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="maria@email.com">
						</div>
						<div class="form-group">
							<label for="senha" class="mb-0">Senha</label>
							<input type="password" class="form-control" id="senha" name="senha"placeholder="*******">
						</div>
						<div class="form-group">
							<label for="confirmar-senha" class="mb-0">Confirmar Senha</label>
							<input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="*******">
						</div>
						<div class="form-group ">
							<label for="sexo" class="mb-0" >Sexo</label>
							<div class="clearfix"></div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" id="feminino" value="feminino">
								<label class="form-check-label" for="feminino">Feminino</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino">
								<label class="form-check-label" for="masculino">Masculino</label>
							</div>
						</div>

						

						
						<br>
						
						<button type="submit" class="btn btn-primary  btn-block centro"  style="margin: 0 auto;" >Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
		<!-- rodapé -->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>