<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Cadastro de questão</title>
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
		<!-- Campo registrar -->
		<div class="container " style="background:transparent; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-2"> </div>

				<div class="col-md-8 rounded" style="background:white;margin-top: 10px;">

					<form action="control/cadastrar-questao.php" method="POST" >
						<p></p>
						 <h3> Cadastro de Questão</h3>

					  <div class="form-group">
					    <label for="nomeQuestao">Nome da Questão</label>
					    <input type="text" class="form-control" id="nomeQuestao" name="nomeQuestao" required>
					  </div>

					 <div class="form-group">
					    <label for="assuntoQuestao">Assunto da Questão</label>
					    <input type="text" class="form-control" id="assuntoQuestao" name="assuntoQuestao"required>
					  </div>

					  <div class="form-group">
					    <label for="dificuldadeQuestao">Dificuldade da Questão</label>
					      <select id="dificuldadeQuestao" name="dificuldadeQuestao" class="form-control" required>
					        <option value ="1" >1 - Fácil</option>
					        <option value ="2" >2 - Médio</option>
					        <option value ="3" >3 - Difícil</option>
					      </select>
					  </div>

					  <div class="form-group">
					    <label for="enunciadoQuestao">Enunciado da questão</label>
					    <textarea class="form-control" id="enunciadoQuestao" name="enunciadoQuestao" rows="5" required></textarea>
					  </div>

					  <h3> Alternativas</h3>

					<!-- alternativa 1 -->
					<p> <b>ALTERNATIVA 1 (correta)</b></p>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa1" name="campoAlternativa1"  rows="3"></textarea>
					   </div>

					<!-- alternativa 2 -->
					  <p> <b>ALTERNATIVA 2</b></p>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa2" name="campoAlternativa2" rows="3"></textarea>
					   </div>

					  <!-- alternativa 3 -->
					  <p> <b>ALTERNATIVA 3</b></p>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa3" name= "campoAlternativa3" rows="3"></textarea>
					   </div>


					  <!-- alternativa 4 -->
					 <p> <b>ALTERNATIVA 4</b></p>
					  <div class="form-group">
					       <textarea class="form-control" id="campoAlternativa4" name= "campoAlternativa4" rows="3"></textarea>
					   </div>



					 <div class="form-group">
					    <label for="paraSalvar">Dados a salvar na submissão</label>
					    <textarea class="form-control" id="paraSalvar" name="paraSalvar" rows="2" required></textarea>
					  </div>


					  <div class="text-center">
					  	<div class="row">
					  		<div class="col-md-2"></div>
					  		<div class="col-md-3">
					  			<a href="questoes" class="btn btn-primary"> CANCELAR</a>
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