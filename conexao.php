<?php

$servidor = "localhost";
$login = "root";
$senha = "";
$banco = "abril";
$con = mysql_connect($servidor, $login, $senha);

if($con != NULL)
{
	$db = mysql_select_db($banco);	
}

include "common.php";
?>
