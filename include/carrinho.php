<!-- 
    CÓDIGO DO RAMOS
 -->

<?php 
if(!isset($_SESSION["carrinho"])){
    $valorTotal = "";
    $quantidade = 0;
}else{
    $valorTotal = 'R$ '.$_SESSION["carrinho"]["valortotal"];
    $quantidade = $_SESSION["carrinho"]["quantidade"];
}
?>
<!-- Cart -->

    <li class="header-cart dropdown default-dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
            <div class="header-btns-icon">
                <i class="fa fa-shopping-cart"></i>
                <span class="qty" id="qtdeCarrinho"><?php echo $quantidade?></span>
            </div>
            <strong class="text-uppercase">My Cart:</strong>
            <br>
            <span id="valorTotalCarrinho"><?php echo $valorTotal?></span>
        </a>
        <div class="custom-menu">
            <div id="shopping-cart">
                <div class="shopping-cart-list" id="shopping-cart-list">
                    <?php foreach($_SESSION["carrinho"]["itens"] as $item):?>
                        <div class="product product-widget">
                            <div class="product-thumb">
                                <img src="<?=$item["imagem"]?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">R$ <?=$item["preco"]?></h3>
                                <h2 class="product-name"><a href="#"><?=$item["nome"]?></a></h2>
                            </div>
                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                        </div>  
                    <?php endforeach; ?>  
                </div>
                <div class="shopping-cart-btns">
                    <button class="main-btn">View Cart</button>
                    <button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
                </div>
            </div>
        </div>
    </li>

<!-- /Cart -->