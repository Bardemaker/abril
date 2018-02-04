<?php
include "conexao.php";

$id = $_GET['id'];

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Abril</title>

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


<script language="javascript" type="application/javascript">
function validateForm() {
	var nome = document.forms["edit_user"]["nome"].value;
	if (nome == "") {
		alert("Nome não pode ser em branco");
		return false;
	}
	
	var email = document.forms["edit_user"]["email"].value;
	if (email == "") {
		alert("e-mail não pode ser em branco");
		return false;
	}
	
	var telefone = document.forms["edit_user"]["telefone"].value;
	if (telefone == "") {
		alert("Telefone não pode ser em branco");
		return false;
	}

}
</script>

<script language="javascript" type="application/javascript">
function confirmaExclusao() {
var answer = confirm ("Tem certeza que deseja excluir o cliente?")
if (answer)
window.location="apagar_cliente.php?id=<?php echo $id;?>";
}
</script>

</head>

<body>
<?php




$busca = "SELECT * FROM cliente where idcliente = '$id'";
$retorna_busca = mysql_query($busca);
$resultado = mysql_fetch_object($retorna_busca);

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
              <li><a href="./">Inicial</a></li>
              <li class="active"><a href="clientes.php">Cadastro de clientes</a></li>
              <li><a href="produtos.php">Relação de produtos</a></li>
              <li><a href="compra.php">Registrar compra</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">

<?php


if (isset ($_GET['alerta']))
{
?>
<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign"></span> <strong>Não é possível remover cliente!</strong> Existem compras associadas a ele.
      </div>
<?php

}
?>


      <div class="page-header">
        <h3>Editar usuário</h3>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $resultado->nome;?></h3>

            </div>
            <div class="panel-body">
            	<form name="edit_user" id="edit_user" action="edit_cliente_proc.php" method="post" onSubmit="return validateForm()">
            	<input type="hidden" name="id" value="<?php echo $id; ?>">

         <table class="table">
            
              <tr>
              <td class="col-md-2">Nome</td><td class="col-md-10"><input type="text" name="nome" id="nome" value="<?php echo $resultado->nome;?>" class="col-md-8"></td></tr>
            
              <tr>
              <td class="col-md-2">E-mail</td><td class="col-md-10"><input type="text" name="email" id="email" value="<?php echo $resultado->email;?>" class="col-md-8"></td></tr>
              <tr>
              <td class="col-md-2">Telefone</td><td class="col-md-10"><input type="text" id="telefone" name="telefone" value="<?php echo $resultado->telefone;?>" class="col-md-8 telefone"></td></tr></table>           

        <button class="btn btn-default" onclick="document.submit()">Salvar Alterações</button> <button type="button" class="btn btn-default" onclick="location.href='clientes.php'">Cancelar</button>      <button type="button" class="btn btn-warning" style="float:right"  onclick="confirmaExclusao();">Excluir usuário</button></form>


 </div> 
          </div>
        </div>
   <?php     
        
$query = "SELECT pe.*, pr.* FROM pedido AS pe INNER JOIN produto AS pr ON pe.id_produto = pr.idproduto where pe.id_cliente = '$id'";
$res = mysql_query($query);
$linha = mysql_num_rows($res);


if($linha != 0)
  	{

?>

<div class="col-sm-12">
<h3>Produtos comprados por este cliente:</h3><br>
<table class="table table-striped">
<tr style="background-color:#ccc"><td><strong>Produto</strong></td><td><strong>Valor</strong></td></tr>

<?php

  while($retorno = mysql_fetch_object($res))
  {
  	
 	echo "<tr><td>" . $retorno->descricao . "</td><td>R$ <span class=\"dinheiro\">" . $retorno->preco . "</span></td></tr>";

  }
  }
if($linha != 0)
  	{

?>

        
  </table>      
    </div>    
<?php
}
?>
        
      </div>
      
&copy; <script>document.write(new Date().getFullYear())</script> - Editora Abril - Desenvolvido por Heitor Neto
</div>

<script>
  $(document).ready(function(){
    $('.dinheiro').mask('000.000.000.000.000,00', {reverse: true});

  
  $(".telefone").mask("(99) 99999-9999");

$(".telefone").on("blur", function() {
    var last = $(this).val().substr( $(this).val().indexOf("-") + 1 );

    if( last.length == 3 ) {
        var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
        var lastfour = move + last;
        var first = $(this).val().substr( 0, 9 );

        $(this).val( first + '-' + lastfour );
    }
});
});
</script>
</body>
</html>