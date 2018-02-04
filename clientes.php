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
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="css/bootstrap-iso.css" />
<link rel="stylesheet" href="css/jquery.dataTables.min.css" />


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

<script>
$(document).ready(function() {
    $('#tab_clientes').DataTable({
    paging: false,
    searching: false,
    "columnDefs": [{targets: [ 3 ], orderSequence: [ "desc", "asc" ]  }],
    "order": [],
    "aoColumns": [{
            "bSortable": true
        },
        {
            "bSortable": true
 
        },
        {
            "bSortable": true
        }
         
        ],
        "bInfo": false
});
} );
</script>

</head>

<body>
<?php
include "conexao.php";





$busca = "SELECT * from cliente ORDER BY idcliente DESC";
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
              <li><a href="./">Inicial</a></li>
              <li class="active"><a href="clientes.php">Cadastro de clientes</a></li>
              <li><a href="produtos.php">Relação de produtos</a></li>
              <li><a href="compra.php">Registrar compra</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">




<div class="jumbotron">
        <h1>Controle de Estoque</h1>
        <p>Relação de clientes</p>
      </div>


<button type="button" class="btn btn-primary" onclick="location.href='novo_cliente.php'">Novo cliente</button>



<div class="row">


        <div class="col-md-12">
          <table id="tab_clientes" class="table table-striped">
            <thead>
              <tr>
                <th>Nome <span class="glyphicon glyphicon-sort-by-attributes"></span></th>
                <th>e-mail <span class="glyphicon glyphicon-sort-by-attributes"></span></th>
                <th>Telefone <span class="glyphicon glyphicon-sort-by-attributes"></span></th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              
<?php

while($retorno = mysql_fetch_object($retorna_busca))
{		
	echo "<tr><td>" . $retorno->nome . "</td>";
	echo "<td><a href=\"mailto:" . $retorno->email . "\">" . $retorno->email . "</td>";
	echo "<td><span class=\"telefone\">" . $retorno->telefone . "</span></td>";
	echo "<td><a href=\"edit_cliente.php?id=" . $retorno->idcliente . "\" title=\"Editar cadastro\"><span class=\"glyphicon glyphicon-edit\"></span></a> | <a href=\"apagar_cliente.php?id=" . $retorno->idcliente . "\" onclick=\"return confirm('Tem certeza que deseja excluir o cliente?')\" title=\"Apagar cadastro\"><span class=\"glyphicon glyphicon-trash\"></span></a></td></tr>";
 
}
	
	?>
	</tbody>
    </table>
    </div>
        <?php
	

mysql_free_result($retorna_busca);

?>

</div>
&copy; <script>document.write(new Date().getFullYear())</script> - Editora Abril - Desenvolvido por Heitor Neto
</div>

<script>
  $(document).ready(function(){
  $(".telefone").mask("(99) 99999-9999");

$(".telefone").on("blur", function() {
    var last = $(this).val();

    if( last.length == 11 ) {
        //var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
        var lastfour = $(this).val().substr(7, 4);
        var first = $(this).val().substr( 0, 6);

        $(this).val( first + '-' + lastfour );
    }
    if( last.length == 10 ) {
        //var move = $(this).val().substr( $(this).val().indexOf("-") - 1, 1 );
        var lastfour = $(this).val().substr(6, 4);
        var first = $(this).val().substr( 0, 5);

        $(this).val( first + '-' + lastfour );
    }
});
});
</script>
</body>
</html>