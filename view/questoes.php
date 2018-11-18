
		
		

		<!-- Campo registrar -->
		<div class="container" style="background:white; margin-top: 10px;">
			<div class="row" >
				<div class="col-md-12 centro" style="margin-top: 10px;">
					
					<?php
						$page = 0;
						$ant = 0;
						if(!empty($_GET['rota'])){
							$page = intval($_GET['rota']);
						}
						
					

						if(isset($_SESSION['acesso']) && $_SESSION['acesso'] == 1){//é administrador
					
						echo '<a class="btn btn-success float-right" href="cadastro-questao" role="button">CADASTRAR PROBLEMA</a>
						
						<br><br>';
						}
					?>

					<input type="hidden" id="page" name="page" value="<?php echo $page;?>">

					<table class="table table-striped table-sm table-hover ">
						<thead class="thead-dark">
							
						    <tr>
						      <th scope="col" class="w-20">ID</th>
						     <!-- <th scope="col" class="w-10">#</th> --> 
						      <th scope="col" class="w-70">Nome</th>
						     <!--  <th scope="col" class="w-10">Assunto</th> -->
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
		<script src="js/ajaxquestoes.js"></script>
