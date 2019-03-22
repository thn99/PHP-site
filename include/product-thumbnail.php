<?php
foreach ($_SESSION["produtos"] as $item	): ?>
<div class="col-md-4 col-sm-6 col-xs-6">
	<div class="product product-single">
		<div class="product-thumb">
			<div class="product-label">
				<span>New</span>
				<span class="sale">-20</span>
			</div>
			<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
			<?="<img src='".$item['imagem']."' alt=''>" ?>
		</div>
		<div class="product-body">
			<h3 class="product-price">R$ <?=$item["preco"]?></h3>
			<div class="product-rating">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star-o empty"></i>
			</div>
			<h2 class="product-name"><a href="#"><?=$item["nome"]?></a></h2>
			<div class="product-btns">
				<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
				<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
				<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
			</div>
		</div>
	</div>
</div>
<div class="clearfix visible-md visible-lg"></div>
<?php endforeach; ?>