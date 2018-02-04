<?php
session_start();
include "conexao.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = str_replace(",", ".", $_POST['preco']);

$query = "INSERT INTO `produto`(`nome`, `descricao`, `preco`) VALUES ('$nome','$descricao','$preco')";
$res = mysql_query($query);


header ('location: produtos.php'); 

?>