<?php 
//require_once("Cliente.php");
//require_once("interfaces/PF.php");

namespace RW940\Cliente\Types;
use RW940\Cliente\ClienteAbstract

class PessoaFisica extends RW940\Cliente\ClienteAbstract implements PF{
	protected $cpf;


	public function getCPF(){
		return $this->cpf;
	}
	public function setCPF($cpf){
		$this->cpf = $cpf;
		return $this;
	}
}

 ?>