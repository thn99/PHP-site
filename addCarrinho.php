<?php
include("util.php");
session_start();
if (!isset($_SESSION['itens'])){ $_SESSION['itens'] = [];}
$_SESSION['itens']['nomeProduto'] = $_POST["nomeProduto"];
$_SESSION['itens']['precoProduto'] =  $_POST["precoProduto"];
$_SESSION['itens']['link'] =  $_POST["linkProduto"];
header('Location:blank.php');
?>