<?php 
namespace RW940\Cliente;

use \interfaces\EnderecoCobranca;
use \interfaces\Classificacao;


// Classe abstrata nõa pode ser instanciada
abstract class ClienteAbstract implements EnderecoCobranca,Classificacao{
	private $Id;
	private $Nome;
	private $Email;
	private $Endereco;
	private $Numero;
	private $Complemento;
	private $Bairro;
	private $Cidade;
	private $Estado;
	private $Cep;


	private $EnderecoCobranca;
	private $NumeroCobranca;
	private $ComplementoCobranca;
	private $BairroCobranca;
	private $CidadeCobranca;
	private $EstadoCobranca;
	private $CepCobranca;


	private $Classificacao;

	public function setId ($Id){
		$this->id = $Id;
		return $this;
	}
	public function getId(){
		return $this->id;
	}

	public function setNome ($Nome){
		$this->nome = $Nome;
		return $this;
	}
	public function getNome(){
		return $this->nome;
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

/* ------------------------ENDEREÇO DE COBRANÇA-------------------------  */

	public function setEnderecoCobranca ($EnderecoCobranca){
		$this->enderecoCobranca = $EnderecoCobranca;
		return $this;
	}
	public function getEnderecoCobranca (){
		return $this->enderecoCobranca;
	}
	public function setNumeroCobranca ($NumeroCobranca){
		$this->numeroCobranca = $NumeroCobranca;
		return $this;
	}
	public function getNumeroCobranca (){
		return $this->numeroCobranca;
	}
	public function setComplementoCobranca ($ComplementoCobranca){
		$this->complementoCobranca = $ComplementoCobranca;
		return $this;
	}
	public function getComplementoCobranca (){
		return $this->complementoCobranca;
	}
	public function setBairroCobranca ($BairroCobranca){
		$this->bairroCobranca = $BairroCobranca;
		return $this;
	}
	public function getBairroCobranca (){
		return $this->bairroCobranca;
	}
	public function setCidadeCobranca ($CidadeCobranca){
		$this->cidadeCobranca = $CidadeCobranca;
		return $this;
	}
	public function getCidadeCobranca (){
		return $this->cidadeCobranca;
	}
	public function setEstadoCobranca ($EstadoCobranca){
		$this->estadoCobranca = $EstadoCobranca;
		return $this;
	}
	public function getEstadoCobranca (){
		return $this->estadoCobranca;
	}
	public function setCepCobranca ($CepCobranca){
		$this->cepCobranca = $CepCobranca;
		return $this;
	}
	public function getCepCobranca (){
		return $this->cepCobranca;
	}



/* ------------------------CLASSIFICACAO-------------------------  */

	public function setClassificacao ($Classificacao){
		$this->classificacao = $Classificacao;
		return $this;
	}
	public function getClassificacao (){
		return $this->classificacao;
	}


}
 ?>