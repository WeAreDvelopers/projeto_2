<?php 
require_once "Cliente.php";

function caminho(){
	$folder = 'paginas/';
	$scanDir = array_diff(scandir($folder), array('..', '.'));

	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$patch = explode("/", $rota['path']);
	
    $X = array_filter($patch); 
	$file = end($X);	
	if(!is_file($folder.$file)){
		$order = $file;
		$file = array_pop($X);
		$file = end($X);
	}
	if(is_dir('../'.$file.'/') == true){
			$file = 'home';	
	};
	if(in_array($file.'.php',$scanDir)){
		return  'paginas/'.$file.'.php';
	}else{
		
		return  'paginas/'.'404.php';
	}
};



for($i=1; $i<= 10; $i++){
$cliente = new Clientes();
$cliente->setNome("Cliente " . $i)
		->setCpf("123.456.789-".$i)
		->setEmail("cliente".$i."@teste.com.br")
		->setEndereco("Rua Teste ".$i)
		->setNumero("10".$i)
		->setComplemento('Ap 20' .$i)
		->setBairro('Bairro '.$i)
		->setCidade("Cidade ".$i)
		->setEstado("Estado ".$i)
		->setCep("12.200-00".$i);

	$arrayClientes[] = array(
		$cliente->getNome(),
		$cliente->getCpf(),
		$cliente->getEmail(),
		$cliente->getEndereco(),
		$cliente->getNumero(),
		$cliente->getComplemento(),
		$cliente->getBairro(),
		$cliente->getCidade(),
		$cliente->getEstado(),
		$cliente->getCep(),
	);
}
function ordenaArray($arrayClientes){
	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$patch = explode("/", $rota['path']);
	//PEGO O ULTIMO ELEMENTO VALIDO DO ARRAY E VERIFICO SE ELE NÃO É UMA PASTA
    $X = array_filter ($patch);  
	$order = end($X);

	if($order == 'a-z'){
		ksort($arrayClientes);
	}
	if($order == 'z-a'){
		krsort($arrayClientes);
	}
	return $arrayClientes;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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