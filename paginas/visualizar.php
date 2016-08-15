  	<?php 
   $rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
   $patch = explode("/", $rota['path']);
   use RW940\Cliente\Types\PessoaFisica;
   $X = array_filter($patch); 
   $file = end($X);

   $cliente = $clientes[$file];

   ?>

   <div class="row">
    <div class="col-md-6"><h3>Dados Cliente</h3></div>
    <div class="col-md-2 pull-right"><a href="/home" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a></div>	
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Cliente:</strong></div>
    <div class="col-md-8"><?= $cliente->getNome();?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Classificação: </strong></div>
    <div class="col-md-8"><?php for ($i=0; $i <= $clientes[$file]->getClassificacao(); $i++) { 
     echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
   };?></div>
 </div>
 <?php if($cliente instanceof PessoaFisica){?>
 <div class="row">
  <div class="col-md-2"><strong>CPF:</strong></div>
  <div class="col-md-8"><?= $cliente->getCPF(); ?></div>
</div>
<?php }else{ ?>
<div class="row">
  <div class="col-md-2"><strong>CNPJ:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getCNPJ(); ?></div>
</div>
<?php } ?>

<div class="row">
  <div class="col-md-2"><strong>E-mail:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getEmail(); ?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Endereço:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getEndereco(); ?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Número:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getNumero();?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Complemento:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getComplemento(); ?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Bairro:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getBairro();?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Cidade:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getCidade(); ?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Estado:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getEstado(); ?></div>
</div>
<div class="row">
  <div class="col-md-2"><strong>Cep:</strong></div>
  <div class="col-md-8"><?= $clientes[$file]->getCep(); ?></div>
</div>
<?php if($clientes[$file]->getEnderecoCobranca() != ""){
  ?>
  <hr>
  <div class="row">
    <div class="col-md-6"><h3>Endereço de Cobrança</h3></div>

  </div>

  <div class="row">
    <div class="col-md-2"><strong>Endereço:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getEnderecoCobranca(); ?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Número:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getNumeroCobranca();?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Complemento:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getComplementoCobranca(); ?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Bairro:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getBairroCobranca();?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Cidade:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getCidadeCobranca(); ?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Estado:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getEstadoCobranca(); ?></div>
  </div>
  <div class="row">
    <div class="col-md-2"><strong>Cep:</strong></div>
    <div class="col-md-8"><?= $clientes[$file]->getCepCobranca(); ?></div>
  </div>
  <?php

} ?>



