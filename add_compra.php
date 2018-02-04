<?php
session_start();
include "conexao.php";

$cliente = $_POST['cliente'];
$produto = $_POST['produto'];

$query = "INSERT INTO `pedido`(`id_produto`, `id_cliente`) VALUES ('$produto','$cliente')";
$res = mysql_query($query);


header ('location: ./'); 

?>