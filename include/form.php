<?php

?>

<div class='section'><!-- container -->
		<div class='container'>
			<h1>Adiciona itens no carrinho usando PHP e "form submit"</h1>
			<!-- row -->
			<form method="POST" action="addCarrinho.php">
				<div class="form-row">
	  				<div class="col-md-6">
					    <label for="formGroupExampleInput">Nome</label>
					    <input type="text" name="nomeProduto" class="form-control" id="formGroupExampleInput" placeholder="Nome produto">
					  </div>
					  <div class="col-md-2">
					    <label for="formGroupExampleInput2">Preço</label>
					    <input type="text" name="precoProduto" class="form-control" id="formGroupExampleInput2" placeholder="Preço">
					  </div>
				</div>
				<div class="form-row">
					<div class="col-md-8" style="margin-top: 1%">
					<label for="formGroupExampleInput">Link</label>
					 <input type="link" name="linkProduto" class="form-control" id="formGroupExampleInput3" placeholder="Link da imagem do produto">
					</div>
				</div>
				<div class="form-row" >
					<div class="col-md-8" style="margin-top: 1%">
						<button type="submit" class="btn btn-primary">Adicionar ao carrinho</button>
					</div>
				</div>
			</form>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>