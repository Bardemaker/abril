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
	var nome = document.forms["add_user"]["nome"].value;
	if (nome == "") {
		alert("Nome não pode ser em branco");
		return false;
	}
	var senha = document.forms["add_user"]["email"].value;
	if (senha == "") {
		alert("E=-mail não pode ser em branco");
		return false;
	}
	
	var senha = document.forms["add_user"]["telefone"].value;
	if (senha == "") {
		alert("Telefone não pode ser em branco");
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
              <li class="active"><a href="clientes.php">Cadastro de clientes</a></li>
              <li><a href="produtos.php">Relação de produtos</a></li>
              <li><a href="compra.php">Registrar compra</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">


    <div class="page-header">
        <h3>Novo cadastro</h3>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Dados do cliente</h3>
            </div>
            <div class="panel-body">
            	<form name="add_user" id="add_user" action="add_user_proc.php" method="post" onSubmit="return validateForm()">

         <table class="table">
            
              <tr>
              <td class="col-md-3">Nome</td><td class="col-md-9"><input type="text" name="nome" id="nome" class="col-md-8"></td></tr>
            
              <tr>
              <td class="col-md-3">e-mail</td><td class="col-md-9"><input type="text" name="email" id="email" class="col-md-8 email"></td></tr>
              <tr>
              <td class="col-md-3">Telefone</td><td class="col-md-9"><input type="text" name="telefone" id="telefone" class="col-md-8 telefone"></td></tr>
</table>           

        <button class="btn btn-default" onclick="document.submit()">Adicionar usuário</button> <button type="button" class="btn btn-default" onclick="location.href='clientes.php'">Cancelar</button></form>


 </div> 
          </div>
        </div>
      </div>
&copy; <script>document.write(new Date().getFullYear())</script> - Editora Abril - Desenvolvido por Heitor Neto
</div>

<script>
  $(document).ready(function(){
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