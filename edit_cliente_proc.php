<?php
session_start();
include "conexao.php";


$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$remove = array("(", ")", "-", " ");
$telefone = str_replace($remove, "", $_POST['telefone']);



$query = "UPDATE `cliente` SET `nome`='$nome',`email`='$email',`telefone`='$telefone' WHERE `idcliente`='$id'";

/*
$consulta = "SELECT * FROM Usuario";*/
$res = mysql_query($query);


header ('location: clientes.php'); 

?>