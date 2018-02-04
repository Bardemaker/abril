<?php

$servidor = "localhost";
$login = "bardemaker_abril";
$senha = "X{-;z9f(VRPz";
$banco = "bardemaker_abril";
$con = mysql_connect($servidor, $login, $senha);

if($con != NULL)
{
$db = mysql_select_db($banco);
	/*if($db != NULL)
		echo "Sucesso!";	
 	else 
		echo "Erro no servidor";*/	
}

include "common.php";
?>