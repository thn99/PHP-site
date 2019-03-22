<!-- 
    CÓDIGO DO RAMOS
 -->


<?php
session_start();

function debug($param){
    echo "<pre>";
    print_r($param);
    echo "</pre>";
}
debug($_POST);

if(isset($_POST)){
    //só vai acontecer a primera vez. verifico se $_SESSION["carrinho"]["itens"] já é um array, se não faço ser
    if(!isset($_SESSION["carrinho"]["itens"])){
        $_SESSION["carrinho"]["itens"]=[];
    }

    $itemAtual = [];
    $itemAtual["preco"]=$_POST["preco"];
    $itemAtual["nome"]=$_POST["nome"];
    $itemAtual["imagem"]=$_POST["imagem"];
    //Add o objeto em um array dentro da sessão
    array_push($_SESSION["carrinho"]["itens"],$itemAtual);

    //considerando os itens que já estão no array, atualizo esses valores:    
    $_SESSION["carrinho"]["quantidade"]=count($_SESSION["carrinho"]["itens"]);

    $total=0;
    foreach($_SESSION["carrinho"]["itens"] as $item){
        $total = (float)$item["preco"]+(float)$total;
    }

    $_SESSION["carrinho"]["valortotal"]=$total;

    debug($_SESSION);
    header("Location:../addCarinhoSemAjax.php");
}