<?php 
require_once "funcoes.php";

require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";

for ($i=1; $i <= 5; $i++) { 
	${"cliente".$i} = new PessoaFisica();
	${"cliente".$i}->setId("$i")
		->setNome("Cliente $i")
		->setCPF("111.111.111-$i")
		->setEmail("cliente$i@dominio$i.com.br")
		->setEndereco("Rua $i")
		->setNumero("00$i")
		->setComplemento("Casa")
		->setBairro("bairro $i")
		->setCidade("cidade $i")
		->setEstado("UF$i")
		->setCep("00.000-0$i")
		->setClassificacao(rand(0,5));
		$arrayClientes[] = ${"cliente".$i};
}

for ($i=6; $i <= 10; $i++) { 
	${"cliente".$i} = new PessoaJuridica();
	${"cliente".$i}->setId("$i")
		->setNome("Cliente $i")
		->setCNPJ("42.169.422/0001-$i")
		->setEmail("cliente$i@dominio$i.com.br")
		->setEndereco("Rua $i")
		->setNumero("00$i")
		->setComplemento("Casa")
		->setBairro("bairro $i")
		->setCidade("cidade $i")
		->setEstado("UF$i")
		->setCep("00.000-0$i")
		->setClassificacao(rand(0,5))
		->setEnderecoCobranca("Rua $i")
		->setNumeroCobranca("00$i")
		->setComplementoCobranca("Casa")
		->setBairroCobranca("bairro $i")
		->setCidadeCobranca("cidade $i")
		->setEstadoCobranca("UF$i")
		->setCepCobranca("00.000-0$i");
		$arrayClientes[] = ${"cliente".$i};
}
/*
CRIAR OS CADASTROS FICTICIOS DOS CLINETES
*/



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PDO</title>

    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/estilo.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container">
		  <div class="row">

		   <div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
  <div class="panel-body">
		<?php include(caminho()); ?>
  </div>
</div>

		   	
		   	
		   </div>
		  </div>
		</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>