<?php 
	/*session_start();

	if(isset($_SESSION['logado']) and $_SESSION['logado'] == 1){
		
	require_once "config/conexaoDB.php";
	$conn = conexaoDB();

	$sql = "Select * from tcap";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);		
	}else{
	header("Location: index.php");
}*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Lista de Páginas</title>
	
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.css">
	<link rel="stylesheet" href="css/estilo.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

	<script src="library/sweetalert-master/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="library/sweetalert-master/dist/sweetalert.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
				$("#btSend").click(function(e) {
					e.preventDefault();
					$.post("library/update_pg.php",$("#form-invest").serialize(),function(resposta){
						swal({   
							title: "Sucesso!",   
							text: "Tabela salva com sucesso",   
							type: "success",
							timer: 2000,  
							showConfirmButton: false });
					})
				});

				$("#addLine").click(function(e) {
					e.preventDefault();
					var totaltr = $(".table > tbody > tr").length + 1;
					$(".table > tbody").append('<tr><td>'+totaltr+'</td><td><input value="" name="fundo[]" class="input"></td><td><input value="" name="data_cota[]" class="input"></td><td><input value="" name="cota[]" class="input"></td><td><input value="" name="dia_perc[]" class="input"></td><td><input value="" name="mes_perc[]" class="input"></td><td><input value="" name="ano_perc[]" class="input"></td><td><input value="" name="12m_perc[]" class="input"></td><td><input value="" name="24m_perc[]" class="input"></td><td><input value="" name="status[]" class="input"></td><td><i class="icon-remove remover"></i></td></tr>');
				});
				
				$("body").on('click','.remover',function(e){
					$(this).parents('tr').addClass('deleta');
					e.preventDefault();
					swal({
						title: "Tem certeza?",
						text: "Tem certeza que deseja deletar este item.",
						type: "warning",
						showCancelButton: true,
						confirmButtonColor: '#DD6B55',
						confirmButtonText: 'Sim',
						closeOnConfirm: false
					},
					function(isConfirm){   
						if (isConfirm) {     
							swal({
								title: "Item removido!",	
								text: "Tem certeza que deseja deletar este item.",
								type: "success",
								timer: 2000,
								showConfirmButton: false
							});  
							$('.deleta').remove(); 
							$.post("library/update_pg.php",$("#form-invest").serialize(),function(resposta){
								console.log(resposta);
								
							})
						} else {     
							$('tr').removeClass('deleta'); 
					}
					
						
					});
					
					
				});
		});
	</script>
</head>
<body>
	<div class="container-fluid">
		<div class="logout">
			
		</div>
		<div class="tabela-paginas">
			<form action="" id="form-invest">
		<table class="table table-hover ">
			<div class="row-fluid">
				<div class="span4"><h2>Páginas</h2></div>
				

				<div class="btn-group">
  <button class="btn  btn-success" type="button" id="btSend"><i class="icon-ok icon-white"></i> Salvar</button>
 <button class="btn  btn-primary" type="button" id="addLine"><i class="icon-file icon-white"></i> Adicionar</button>
 <a href="logout.php" class="btn "><i class="icon-off"></i> Logout</a>
</div>
			</div>
						
						
						<thead>
							<tr class="success">
								<th width="2%">#</th>
								<th width="13%">FUNDO</th>
								<th width="5%">Data Cota</th>
								<th width="5%">Cota</th>
								<th width="4%">Dia %</th>
								<th width="4%">Mês %</th>
								<th width="4%">Ano %</th>
								<th width="4%">12M %</th>
								<th width="4%">24M %</th>
								<th width="4%">Status</th>	
								<th width="1%"></th>							
							</tr>
						</thead>
						<tbady class="linhas">
							
							<tr>
								<td><?php echo $val['id'];?></td>
								<td><input value="<?php echo $val['fundo'];?>" name="fundo[]" class="input"></td>
								<td><input value="<?php echo $val['data_cota'];?>" name="data_cota[]" class="input"></td>
								<td><input value="<?php echo $val['cota'];?>" name="cota[]" class="input"></td>
								<td><input value="<?php echo $val['dia_perc'];?>" name="dia_perc[]" class="input"></td>
								<td><input value="<?php echo $val['mes_perc'];?>" name="mes_perc[]" class="input"></td>
								<td><input value="<?php echo $val['ano_perc'];?>" name="ano_perc[]" class="input"></td>
								<td><input value="<?php echo $val['12m_perc'];?>" name="12m_perc[]" class="input"></td>
								<td><input value="<?php echo $val['24m_perc'];?>" name="24m_perc[]" class="input"></td>
								<td><input value="<?php echo $val['status'];?>" name="status[]" class="input"></td>
								<td><i class="icon-remove remover"></i></td>
							</tr>
							
						</tbady>
					</table>
					</form>
					</div>
					</div>
</body>
</html>