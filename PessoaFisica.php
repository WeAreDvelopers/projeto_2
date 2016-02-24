<?php 
require_once("Cliente.php");
require_once("interfaces/PF.php");
class PessoaFisica extends Clientes implements PF{
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