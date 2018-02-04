<?php
session_start();
include "conexao.php";

if(!isset ($_GET['id']))
{
header ('location: clientes.php'); 
}
else
{

$id = $_GET['id'];

$busca = "SELECT * from cliente INNER JOIN pedido ON idcliente = id_cliente WHERE idcliente = $id";
$retorna_busca = mysql_query($busca);
$exibe = mysql_fetch_object($retorna_busca);

if($exibe != NULL)
{
	header ('location: edit_cliente.php?id=' . $id . '&alerta=1'); 
}

else

{
$query = "DELETE FROM `cliente` WHERE `idcliente` = '$id'";
$res = mysql_query($query);
header ('location: clientes.php'); 
}
}
?>