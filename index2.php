<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 4-->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<style type="text/css">
		body{
			background: #EAE3EA;
		}	
		label, button{
			font-size: small;
			 text-transform: uppercase;
		}
		</style>
	</head>
	<body>
		
		 <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

		
		<!-- Barra de navegação -->
		<nav class="navbar navbar-expand-lg navbar-light bg-info">
			<div class="container">
				<a class="navbar-brand" href="#">GoMath</a> <!-- marca -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ml-auto mt-auto "> <!-- menu -->
					
					<li class="nav-item">
						<a class="btn btn-success nav-link btn_entrar" href="#">Entrar</a>
					</li>
					
				</ul>
				
			</div>
			</div> <!-- /container -->
		</nav>
		<!-- Campo registrar -->
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
				</div>
				<div class="col-md-4">
					<form>
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
						<div class="form-group">
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
						
						<button type="submit" class="btn btn-primary" >Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
		<!-- rodapé -->
	</body>
</html>