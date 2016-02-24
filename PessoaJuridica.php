<?php 
require_once("Cliente.php");
require_once("interfaces/PJ.php");

class PessoaJuridica extends Clientes implements PJ{
	protected $cnpj;

	public function getCNPJ(){
		return $this->cnpj;
	}
	public function setCNPJ($cnpj){
		$this->cnpj = $cnpj;
		return $this;
	}

}
 ?>