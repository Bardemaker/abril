<?php
session_start();
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$remove = array("(", ")", "-", " ");
$telefone = str_replace($remove, "", $_POST['telefone']);


$query = "INSERT INTO `cliente`(`nome`, `email`, `telefone`) VALUES ('$nome','$email','$telefone')";
$res = mysql_query($query);

header ('location: clientes.php'); 

?>