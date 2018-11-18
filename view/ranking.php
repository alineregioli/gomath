

		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					<h1 class="text-center">Ranking</h1>
					<input type="hidden" id="page" name="page" value="1">
					<input type="hidden" id="limit" name="limit" value="10">
					<input type="hidden" id="user" name="user" value="<?php echo $_SESSION["id"]; ?>">
					<table class="table table-striped table-sm table-hover ">
						<thead class="thead-dark">
							
						    <tr>
						      <th scope="col" class="w-20">Posição</th>
						      <th scope="col" class="w-30">Nome</th>
						      <th scope="col" class="w-30">Pontos</th>
						      <th scope="col" class="w-10">Resolvidos</th>
						    </tr>
						</thead>
						<tbody id="ranking">
				
						    
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
		<script src="js/ajaxranking.js"></script>
