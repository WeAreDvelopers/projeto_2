<?php 
//require_once("Cliente.php");
require_once("interfaces/PJ.php");

namespace RW940\Cliente\Types;
use RW940\Cliente\ClienteAbstract

class PessoaJuridica extends RW940\Cliente\ClienteAbstract implements PJ{
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