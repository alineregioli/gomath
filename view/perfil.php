
		
		

		<!-- Campo registrar -->
		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					
					<label>Nome:</label> <?php echo $_SESSION["nome"]; ?><br>
					<label>Posição:</label><br>
					<label>Resolvido:</label><br>
					<label>Tentado:</label><br>


					<input type="hidden" id="page" name="page" value="0">
					<input type="hidden" id="page" name="page" value="<?php echo $_SESSION["id"]; ?>">
					<h1 class="text-center">Submissões</h1>
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
						<tbody id="problemas">
				
						    
						</tbody>
					</table>
					<nav >
					  <ul class="pagination justify-content-center">
					  	
					    <li class="page-item <?php echo ($page == 0)?'disabled':''; ?>">
					      <a class="page-link" href="<?php echo $page-1; ?>" tabindex="-1">Anterior</a>
					    </li>
					    <li class="page-item" id="next">
					      <a class="page-link" href="<?php echo $page+1;?>">Próximo</a>
					    </li>
					  </ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- rodapé -->
		<script src="js/ajaxperfil.js"></script>
