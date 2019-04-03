<?php
$total = 0;
if(isset($_SESSION['carrinho'])){
    echo "<a class='dropdown-toggle' data-toggle='dropdown' aria-expanded='true'>
    <div class='header-btns-icon'>
        <i class='fa fa-shopping-cart'></i>
    </div>
    <strong class='text-uppercase'>My Cart:</strong>
    <br>
    <span>".$total."</span>
</a>
<div class='custom-menu'>
    <div id='shopping-cart'>
        <div class='shopping-cart-list'>
            
        ";
	for($i = 0; $i < sizeof($_SESSION['carrinho']); $i++){
		$produto = $_SESSION['carrinho'][$i];
		for($j = 0; $j < sizeof($_SESSION['produtos']); $j++){
			if($produto[0] == $_SESSION['produtos'][$j]['id'] && $produto[1] == $_SESSION['produtos'][$j]['tipo']){
                $total += $_SESSION['produtos'][$j]['preco'];
                echo "
                <div class='product product-widget'>
                <div class='product-thumb'>
                    <img src='".$_SESSION['produtos'][$j]['imagem']."' alt=''>
                </div>
                <div class='product-body'>
                    <h3 class='product-price'>R$".$_SESSION['produtos'][$j]['preco']."</h3>
                    <h2 class='product-name'><a href='#'>".$_SESSION['produtos'][$j]['nome']."</a></h2>
                </div>
                <button class='cancel-btn'><i class='fa fa-trash'></i></button>
                </div>";
				
			}
		}
    }
    echo "<div class='shopping-cart-btns'>
    <button class='main-btn'>View Cart</button>
    <button class='primary-btn'>Checkout <i class='fa fa-arrow-circle-right'></i></button>
    </div></div></div></div>";

}

?>
