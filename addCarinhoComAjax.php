<!-- 
	CÓDIGO DO RAMOS
 -->


<?php include "includes/headerToBreadcrumb.php"; ?>
	<div class="section">		
		<div class="container">
			<h1 style="text-align:center;padding-bottom:25px;">Adiciona itens no carrinho usando PHP e AJAX</h1>
			<form action="#" id="formProduto">
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
//debug($_SESSION);
//session_destroy();
?>

<script>
let sessao;	
// intercepta a requisição de submit do form
$("#formProduto").submit(function( event ) {
		// impede de atualizar a página qdo aperta submit
		event.preventDefault();
	
		//Pega os valores do form.
		let nome = $("#formProduto").find( "input[name='nome']" ).val();
		let preco = $("#formProduto").find( "input[name='preco']" ).val();
		let imagem =	$("#formProduto").find( "input[name='imagem']" ).val();

		//Inicia o envio assincrono
		$.ajax({
			method: "POST",
			url: "logica/populaCarrinhoComAjax.php",
			data: { 
				nome: nome, 
				preco: preco,
				imagem: imagem
			},
			success:function(data){
				//Limpa o form
				$("#formProduto")[0].reset();
				//location.reload();				
			}
		}).done(function( retornoDaRequisicao ) {
				sessao =  JSON.parse(retornoDaRequisicao);
				atualizaCarrinho(sessao);
			});
});

function atualizaCarrinho(sessao){
	//Atualiza as informações o carrinho
	$('#valorTotalCarrinho').text('R$ '+sessao.carrinho.valortotal); 
	$('#qtdeCarrinho').text(sessao.carrinho.quantidade); 

	//Pega os dados do último elemento do array
	let ultimoItem = sessao.carrinho.itens[sessao.carrinho.quantidade-1];
	console.log(ultimoItem);
	//Elimina todos os itens existentes no menu
	$("#shopping-cart-list").append(`<div class="product product-widget">
                            <div class="product-thumb">
                                <img src="${ultimoItem.imagem}" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">R$ ${ultimoItem.preco} </h3>
                                <h2 class="product-name"><a href="#">${ultimoItem.nome}</a></h2>
                            </div>
                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                        </div> `);
	//Mais info sobre esse esquema de utilizar html com js (template string/literal):https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/template_strings
}

</script>