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
  		<div class="col-md-8"><?= ${"cliente".$file}->getNome();?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>CPF:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getCpf(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>E-mail:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getEmail(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Endereço:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getEndereco(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Número:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getNumero();?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Complemento:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getComplemento(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Bairro:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getBairro();?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Cidade:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getCidade(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Estado:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getEstado(); ?></div>
  	</div>
  	<div class="row">
  		<div class="col-md-2"><strong>Cep:</strong></div>
  		<div class="col-md-8"><?= ${"cliente".$file}->getCep(); ?></div>
  	</div>
  
  
