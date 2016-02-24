<?php 
interface EnderecoCobranca{

	public function getEnderecoCobranca();
	public function setEnderecoCobranca($enderecoCobranca);

	public function getNumeroCobranca();
	public function setNumeroCobranca($numeroCobranca);

	public function getComplementoCobranca();
	public function setComplementoCobranca($complementoCobranca);

	public function getBairroCobranca();
	public function setBairroCobranca($bairroCobranca);

	public function getCidadeCobranca();
	public function setCidadeCobranca($cidadeCobranças);

	public function getEstadoCobranca();
	public function setEstadoCobranca($estadoCobranca);

	public function getCepCobranca();
	public function setCepCobranca($cepCobranca);

} ?>