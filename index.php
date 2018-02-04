<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abril</title>
<link rel="icon" href="favicon.ico">


<!-- 
<link href="css/bootstrap.css" rel="stylesheet">

 -->
  

  <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/carousel.css" rel="stylesheet">
    <link href="css/sticky-footer.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="js/jquery.mask.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>


<style>
.jumbotron {
  padding-top: 5px;
  padding-bottom: 10px;
  margin-bottom: 10px;
  color: #fff;
  background-color: #a6c984;
}

.jumbotron h1,
.jumbotron .h1 {
  font-size: 40px;
  color: inherit;
}

.jumbotron p {
  margin-bottom: 10px;
  font-size: 18px;
  font-weight: 100;
}
</style>

</head>

<body>
<?php
include "conexao.php";





$busca = "SELECT * from cliente INNER JOIN pedido ON idcliente = id_cliente GROUP BY idcliente DESC";
$retorna_busca = mysql_query($busca);

?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="margin-top:-5px;" href="./"><img src="images/logo_abril.png"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="./">Inicial</a></li>
              <li><a href="clientes.php">Cadastro de clientes</a></li>
              <li><a href="produtos.php">Relação de produtos</a></li>
              <li><a href="compra.php">Registrar compra</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">




<div class="jumbotron">
        <h1>Controle de Estoque</h1>
        <p>Relação de compras feitas pelos clientes</p>
      </div>


<div class="row">
<?php

while($retorno = mysql_fetch_object($retorna_busca))
{	
	echo "<div class=\"col-md-6\">";
	echo "<div class=\"well\">";
	echo "<span style=\"font-size:10px;\">Nome do cliente: </span><br><strong>" . $retorno->nome . "</strong><br>";
	
	$id_do_cliente = $retorno->id_cliente;
	$query = "SELECT p.nome AS nome_produto, p.* FROM produto AS p INNER JOIN pedido AS pe on p.idproduto = pe.id_produto where pe.id_cliente = $id_do_cliente";
	$resposta = mysql_query($query);
	
	?>
	<p>
	<table class="table table-striped">
	<tr><th><span style="font-size:10px;">Produto:</span></th>
	<th style="text-align:right"><span style="font-size:10px;">Valor: </span></th></tr>
	
	<?php
	
	$total = 0;
	
	while($exibe = mysql_fetch_object($resposta))
	{
		echo "<tr><td>";
		echo $exibe->descricao . "</td><td align=\"right\">R$ <span class=\"dinheiro\">" . $exibe->preco . "</span>";
		$total += $exibe->preco;
		$total = number_format($total, 2, ',', '.');
		echo "</td></tr>";
	}
	//echo "<tr><td colspan=\"2\" align=\"right\"></td></tr>";
	echo "</table></p>";
	echo "<div class=\"badge\" style=\"float:right;margin:-10px;\">Total: R$ <span class=\"dinheiro\">" . $total . "</span></div>";
	echo "</div></div>";
}
	
	
	

mysql_free_result($retorna_busca);
mysql_free_result($resposta);




// $query = "select pe.*, pr.*, pr.nome AS nome_produto, cl.*, cl.nome AS nome_cliente from pedido AS pe INNER JOIN produto AS pr ON pe.id_produto = pr.idproduto INNER JOIN cliente AS cl ON pe.id_cliente = cl.idcliente";
// $resposta = mysql_query($query);
// 
// while($exibe = mysql_fetch_object($resposta))
// {
// 
// echo "Produto: " . $exibe->descricao . "<br>Valor: R$ " . $exibe->preco . "<br>Cliente: " . $exibe->nome_cliente . "<br><br>";
// 
// }



?>

</div>
&copy; <script>document.write(new Date().getFullYear())</script> - Editora Abril - Desenvolvido por Heitor Neto
</div>

<script>
  $(document).ready(function(){
  $('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});
});
</script>
</body>
</html>