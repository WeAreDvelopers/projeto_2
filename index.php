<?php 
require_once __DIR__ . "/autoload.php";
require_once "funcoes.php";
use RW940\Cliente\Types\PessoaFisica;
use RW940\Cliente\Types\PessoaJuridica;
use RW940\DB\Database;

$db = new Database();
$pdo = $db->connect();


$stmt = $pdo->prepare("SELECT * FROM clientes");
$stmt->execute();
$res = $stmt->fetchAll(\PDO::FETCH_ASSOC);
foreach ($res as $key => $value) {
	if($value['cpf'] != ""){
		//$clientes[] = new PessoaFisica($value['id'],$value['nome'],$value['classificacao'],$value['nome']);
		
		
		$clientes[$key] = new PessoaFisica();
		$clientes[$key]->setId($value['id'])
		->setNome($value['nome'])
		->setCPF($cpf['cpf'])
		->setEmail($value['email'])
		->setEndereco($value['endereco'])
		->setNumero($value['numer'])
		->setComplemento($value['complemento'])
		->setBairro($value['bairro'])
		->setCidade($value['cidade'])
		->setEstado($value['estado'])
		->setCep($value['cep'])
		->setClassificacao($value['classificacao']);
		
	}else{
		$clientes[$key] = new PessoaJuridica();
		$clientes[$key]->setId($value['id'])
		->setNome($value['nome'])
		->setCNPJ($value['cnpj'])
		->setEmail($value['email'])
		->setEndereco($value['endereco'])
		->setNumero($value['numer'])
		->setComplemento($value['complemento'])
		->setBairro($value['bairro'])
		->setCidade($value['cidade'])
		->setEstado($value['estado'])
		->setCep($value['cep'])
		->setClassificacao($value['classificacao']);
	}
}


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
  						<?php require_once(caminho()); ?>
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