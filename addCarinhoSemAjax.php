<!-- 
	CÓDIGO DO RAMOS
 -->


<?php include "includes/headerToBreadcrumb.php"; ?>
	<div class="section">		
		<div class="container">
			<h1 style="text-align:center;padding-bottom:25px;">Adiciona itens no carrinho usando PHP e "form submit"</h1>
			<form action="./logica/populaCarrinhoSemAjax.php" method="POST">
				<!-- Conteúdo add. Não é do original do template-->
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="inputEmail4">Nome</label>
						<input type="text" class="form-control" id="nome"  name="nome"placeholder="Nome produto">
					</div>
					<div class="form-group col-md-2">
						<label for="inputPassword4">Preço</label>
						<input type="number" step="0.01" class="form-control" id="preco" name="preco" placeholder="Preço">
					</div>
				</div>

				<div class="form-group col-md-8">
					<label for="inputAddress">Link Imagem</label>
					<input type="text" class="form-control" id="imagem" name="imagem" placeholder="URL válida de uma imagem">
				</div>					
			
				<div class="form-group col-md-6">
					<button type="submit" class="btn btn-primary">Add no carrinho</button>
				</div>
				
			</form>
		</div>
	</div>
<?php include "includes/footerToScripsJS.php";
debug($_SESSION); 
//session_destroy();
?>