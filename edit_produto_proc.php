<?php
session_start();
include "conexao.php";


$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = str_replace(",", ".", $_POST['preco']);



$query = "UPDATE `produto` SET `nome`='$nome',`descricao`='$descricao',`preco`='$preco' WHERE `idproduto`='$id'";
$res = mysql_query($query);


header ('location: produtos.php'); 

?>