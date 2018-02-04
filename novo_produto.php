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
	var nome = document.forms["add_produto"]["nome"].value;
	if (nome == "") {
		alert("Nome não pode ser em branco");
		return false;
	}
	var senha = document.forms["add_produto"]["descricao"].value;
	if (senha == "") {
		alert("Descrição não pode ser em branco");
		return false;
	}
	
	var senha = document.forms["add_produto"]["preco"].value;
	if (senha == "") {
		alert("Preço não pode ser em branco");
		return false;
	}

}

</script>



</head>

<body>
<?php
include "conexao.php";
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
              <li><a href="clientes.php">Cadastro de clientes</a></li>
              <li class="active"><a href="produtos.php">Relação de produtos</a></li>
              <li><a href="compra.php">Registrar compra</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">


    <div class="page-header">
        <h3>Novo produto</h3>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Dados do produto</h3>
            </div>
            <div class="panel-body">
            	<form name="add_produto" id="add_produto" action="add_produto_proc.php" method="post" onSubmit="return validateForm()">

         <table class="table">
            
              <tr>
              <td class="col-md-3">Nome</td><td class="col-md-9"><input type="text" name="nome" id="nome" class="col-md-8"></td></tr>
            
              <tr>
              <td class="col-md-3">Descrição</td><td class="col-md-9">  <textarea class="col-md-8" rows="5" name="descricao" id="descricao"></textarea></td></tr>
              <tr>
              <td class="col-md-3">Preço</td><td class="col-md-9"><input type="text" name="preco" id="preco" class="col-md-8 dinheiro"></td></tr>
</table>           

        <button class="btn btn-default" onclick="document.submit()">Adicionar produto</button> <button type="button" class="btn btn-default" onclick="location.href='produtos.php'">Cancelar</button></form>


 </div> 
          </div>
        </div>
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