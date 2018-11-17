
		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					<h1 class="text-center">Perfil</h1>
					<label>Nome:</label> <?php echo $_SESSION["nome"]; ?><br>
					<label id="pos">Posição:</label> <br>
					<label id="pon">Pontos:</label> <br>
					<label id="res">Resolvidos:</label><br>
					<label id="ten">Tentados:</label><br>


					<input type="hidden" id="page" name="page" value="1">
					<input type="hidden" id="limit" name="limit" value="4">
					<input type="hidden" id="user" name="user" value="<?php echo $_SESSION["id"]; ?>">
					<h1 class="text-center">Submissões</h1>
					<table class="table table-striped table-sm table-hover ">
						<thead class="thead-dark">
							
						    <tr>
						      <th scope="col" class="w-20">ID</th>
						      <th scope="col" class="w-10">Data</th>
						      <th scope="col" class="w-30">Nome</th>
						      <th scope="col" class="w-10">Veredito</th>
						    </tr>
						</thead>
						<tbody id="submissoes">
				
						    
						</tbody>
					</table>
					<nav >
					  <ul class="pagination justify-content-center">
					  	
					    <li class="page-item disabled" id="prev">
					      <a class="page-link" href="#" tabindex="-1">Anterior</a>
					    </li>
					    <li class="page-item" id="next">
					      <a class="page-link" href="#">Próximo</a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- rodapé -->
		<script src="js/ajaxperfil.js"></script>
