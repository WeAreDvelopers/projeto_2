<?php 
//require_once("Cliente.php");
//require_once("interfaces/PJ.php");

namespace RW940\Cliente\Types;
use \RW940\Cliente\ClienteAbstract;
use \RW940\Cliente\interfaces\PJ;

class PessoaJuridica extends ClienteAbstract implements PJ{
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