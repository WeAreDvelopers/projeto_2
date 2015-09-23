<?php 
session_start();
require_once "../config/conexaoDB.php";
$conn = conexaoDB();



$fundo 		= $_POST['fundo'];
$data_cota 	= $_POST['data_cota'];
$cota 		= $_POST['cota'];
$dia_perc 	= $_POST['dia_perc'];
$mes_perc 	= $_POST['mes_perc'];
$ano_perc 	= $_POST['ano_perc'];
$dozem_perc 	= $_POST['12m_perc'];
$vintem_perc 	= $_POST['24m_perc'];
$status = $_POST['status'];

$smt = $conn->prepare("TRUNCATE tcap");
$drop = $smt->execute();
if($drop){
	foreach ($fundo as $key => $val){
		$smt = $conn->prepare("INSERT INTO tcap (fundo,data_cota, cota, dia_perc,mes_perc,ano_perc,12m_perc,24m_perc,status)VALUE(:fundo,:data_cota, :cota, :dia_perc, :mes_perc, :ano_perc, :12m_perc, :24m_perc, :status);");
		$smt->bindParam(":fundo",$val);
		$smt->bindParam(":data_cota",$data_cota[$key]);
		$smt->bindParam(":cota",$cota[$key]);
		$smt->bindParam(":dia_perc",$dia_perc[$key]);
		$smt->bindParam(":mes_perc",$mes_perc[$key]);
		$smt->bindParam(":ano_perc",$ano_perc[$key]);
		$smt->bindParam(":12m_perc",$dozem_perc[$key]);
		$smt->bindParam(":24m_perc",$vintem_perc[$key]);
		$smt->bindParam(":status",$status[$key]);
		$smt->execute();
	}
}


		


 ?>