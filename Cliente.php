<?php 
class Clientes{
	private $Nome;
	private $Cpf;
	private $Email;
	private $Endereco;
	private $Numero;
	private $Complemento;
	private $Bairro;
	private $Cidade;
	private $Estado;
	private $Cep;

	public function setNome ($Nome){
		$this->nome = $Nome;
		return $this;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setCpf ($Cpf){
		$this->cpf = $Cpf;
		return $this;
	}
	public function getCpf(){
		return $this->cpf;
	}
	public function setEmail ($Email){
		$this->email = $Email;
		return $this;
	}
	public function getEmail (){
		return $this->email;
	}
	public function setEndereco ($Endereco){
		$this->endereco = $Endereco;
		return $this;
	}
	public function getEndereco (){
		return $this->endereco;
	}
	public function setNumero ($Numero){
		$this->numero = $Numero;
		return $this;
	}
	public function getNumero (){
		return $this->numero;
	}
	public function setComplemento ($Complemento){
		$this->complemento = $Complemento;
		return $this;
	}
	public function getComplemento (){
		return $this->complemento;
	}
	public function setBairro ($Bairro){
		$this->bairro = $Bairro;
		return $this;
	}
	public function getBairro (){
		return $this->bairro;
	}
	public function setCidade ($Cidade){
		$this->cidade = $Cidade;
		return $this;
	}
	public function getCidade (){
		return $this->cidade;
	}
	public function setEstado ($Estado){
		$this->estado = $Estado;
		return $this;
	}
	public function getEstado (){
		return $this->estado;
	}
	public function setCep ($Cep){
		$this->cep = $Cep;
		return $this;
	}
	public function getCep (){
		return $this->cep;
	}


}
 ?>