  	<?php 
	$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$patch = explode("/", $rota['path']);
	
    $X = array_filter($patch); 
	$file = end($X);
	

		 ?>

  	<div class="row">
  		<div class="col-md-6"><h2>Visualizar Cliente</h2></div>
  		<div class="col-md-2 pull-right"><a href="/home" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a></div>
  		
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Cliente:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][0]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>CPF:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][1]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>E-mail:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][2]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Endereço:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][3]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Número:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][4]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Número:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][5]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Bairro:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][6]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Cidade:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][7]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Estado:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][8]; ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Cep:</strong></div>
  		<div class="col-md-8"><?= $arrayClientes[$file][9]; ?></div>
  	</div>
  
  
