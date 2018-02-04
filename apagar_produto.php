<?php
session_start();
include "conexao.php";

if(!isset ($_GET['id']))
{
header ('location: produtos.php'); 
}
else
{

$id = $_GET['id'];

$busca = "SELECT * from produto INNER JOIN pedido ON idproduto = id_produto WHERE idproduto = $id";
$retorna_busca = mysql_query($busca);
$exibe = mysql_fetch_object($retorna_busca);

if($exibe != NULL)
{
	header ('location: edit_produto.php?id=' . $id . '&alerta=1'); 
}

else

{
$query = "DELETE FROM `produto` WHERE `idproduto` = '$id'";
$res = mysql_query($query);
header ('location: produtos.php'); 
}
}
?>