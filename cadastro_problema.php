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
		<div class="container " style="background:transparent; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-2"> </div>

				<div class="col-md-8 rounded" style="background:white;margin-top: 10px;">

					<form  >
						<p></p>
						 <h3> Cadastro de Questão</h3>

					  <div class="form-group">
					    <label for="nomeQuestao">Nome da Questão</label>
					    <input type="text" class="form-control" id="nomeQuestao" >
					  </div>

					 <div class="form-group">
					    <label for="assuntoQuestao">Assunto da Questão</label>
					    <input type="text" class="form-control" id="assuntoQuestao" >
					  </div>

					  <div class="form-group">
					    <label for="dificuldadeQuestao">Dificuldade da Questão</label>
					      <select id="dificuldadeQuestao" class="form-control">
					        <option>1 - Fácil</option>
					        <option>2 - Médio</option>
					        <option>3 - Difícil</option>
					      </select>
					  </div>

					  <div class="form-group">
					    <label for="enunciadoQuestao">Enunciado da questão</label>
					    <textarea class="form-control" id="enunciadoQuestao" rows="5"></textarea>
					  </div>

					  <h3> Alternativas</h3>

					<!-- alternativa 1 -->
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="alternativa" id="alternativa1" value="1" >
						  <label class="form-check-label" for="alternativa1">
						   	Alternativa 1
						  </label>
					  </div>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa1" rows="3"></textarea>
					   </div>

					<!-- alternativa 2 -->
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="alternativa" id="alternativa2" value="2" >
						  <label class="form-check-label" for="alternativa2">
						   	Alternativa 2
						  </label>
					  </div>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa2" rows="3"></textarea>
					   </div>

					  <!-- alternativa 3 -->
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="alternativa" id="alternativa3" value="3" >
						  <label class="form-check-label" for="alternativa3">
						   	Alternativa 3
						  </label>
					  </div>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa3" rows="3"></textarea>
					   </div>


					  <!-- alternativa 4 -->
					  <div class="form-check">
						  <input class="form-check-input" type="radio" name="alternativa" id="alternativa4" value="4" >
						  <label class="form-check-label" for="alternativa4">
						   	Alternativa 4
						  </label>
					  </div>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa4" rows="3"></textarea>
					   </div>



					 <div class="form-group">
					    <label for="paraSalvar">Dados a salvar na submissão</label>
					    <textarea class="form-control" id="paraSalvar" rows="2"></textarea>
					  </div>


					  <div class="text-center">
					  	<div class="row">
					  		<div class="col-md-2"></div>
					  		<div class="col-md-3">
					  			<button type="submit" class="btn btn-primary">Cancelar</button>
					  		</div>
					  		<div class="col-md-2"></div>
					  		<div class="col-md-3">
					  			<button type="submit" class="btn btn-primary ">Salvar</button>
					  		</div>
					  		<div class="col-md-2"></div>

					  	</div>
					  

					  
					</div>
					</form>
				</div>

				<div class="col-md-2"> </div>
			</div>
		</div>
		<!-- rodapé -->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>