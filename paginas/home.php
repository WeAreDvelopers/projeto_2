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
	 	<td>Ações</td>
	 </tr>
	<?php 
foreach (ordenaArray($arrayClientes) as $key => $val) {
	  ?>
	 <tr>
	 	<td><?= $key?></td>
	 	<td><?= $val[0]?></td>
	 	<td><a href="visualizar/<?= $key?>"><span class="glyphicon glyphicon-eye-open"></span>	</a></td>
	 </tr>
	 <?php 
	 }
?>
	</table>
