  	<?php    
    use RW940\Cliente\Types\PessoaFisica;
    ?>
    <div class="row">
      <div class="col-md-6"><h2>Lista de Clientes</h2></div>
      <div class="col-md-6">
       <ul class="list-order">
        <li><a href="a-z" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-sort-by-alphabet"></span></a></li>
        <li><a href="z-a" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-sort-by-alphabet-alt"></span></a></li>
      </ul>

    </div>
  </div>

  <table class="table table-condensed">
    <tr>
     <td>#</td>
     <td>Nome</td>
     <td>Tipo Cliente</td>
     <td>Classificação</td>

     <td>Visualizar</td>

   </tr>
   <?php 

   foreach (ordenaArray($clientes) as $key => $val) {
     ?>
     <tr>
      <td><?= $val->getId()?></td>
      <td><?= $val->getNome();?></td>
      <td><?= $val instanceof PessoaFisica ? 'PF' : 'PJ';?></td>
      <td><?php for ($i=0; $i <= $val->getClassificacao(); $i++) { 
       echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
     }?></td>
     <td><a href="visualizar/<?= $val->getId()?>"><span class="glyphicon glyphicon-eye-open"></span>	</a></td>

   </tr>
   <?php 
 }
 ?>
</table>
