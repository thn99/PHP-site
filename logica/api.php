<?php 

include('util.php');

session_start();

$retornoEmJson = file_get_contents('http://ramos.atwebpages.com/api/produtos.php?param=todos');

$retornoEmJson = json_decode($retornoEmJson, true);

$_SESSION['produtos'] = $retornoEmJson;
$_SESSION['params'] = "todos";
?>