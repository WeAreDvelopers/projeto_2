<?php 
namespace RW940\DB;


use RW940\Cliente\ClienteAbstract;
use RW940\Cliente\Types\PessoaFisica;


class ClientePersister{

	protected $pdo;
	protected $clientes = []; 
	public function __construct(\PDO $pdo){
		$this->pdo = $pdo;
	}
	public function persist(ClienteAbstract $cliente){
		$this->clientes[] = $cliente;
		return $this;
	}
	public function flush(){
		foreach ($this->clientes as $cliente) {
			$stmt = $this->pdo->prepare("INSERT INTO clientes 
				(nome,email,endereco,numero,complemento,bairro,cidade,estado,cep,endereco_cobranca,numero_cobranca,complemento_cobranca,cep_cobranca,classificacao,cpf,cnpj)
				VALUES
				(:nome,:email,:endereco,:numero,:complemento,:bairro,:cidade,:estado,:cep,:endereco_cobranca,:numero_cobranca,:complemento_cobranca,:cep_cobranca,:classificacao,:cpf,:cnpj)");
			$stmt->bindValue(":nome", $cliente->getNome());
			$stmt->bindValue(":email", $cliente->getEmail());
			$stmt->bindValue(":endereco", $cliente->getEndereco());
			$stmt->bindValue(":numero", $cliente->getNumero());
			$stmt->bindValue(":complemento", $cliente->getComplemento());
			$stmt->bindValue(":bairro", $cliente->getBairro());
			$stmt->bindValue(":cidade", $cliente->getCidade());
			$stmt->bindValue(":estado", $cliente->getEstado());
			$stmt->bindValue(":cep", $cliente->getCep());
			$stmt->bindValue(":endereco_cobranca", $cliente->getEnderecoCobranca());
			$stmt->bindValue(":numero_cobranca", $cliente->getNumeroCobranca());
			$stmt->bindValue(":complemento_cobranca", $cliente->getComplementoCobranca());
			$stmt->bindValue(":cep_cobranca", $cliente->getCepCobranca());
			$stmt->bindValue(":classificacao", $cliente->getClassificacao());
			if($cliente instanceof PessoaFisica){
				$stmt->bindValue(":cpf", $cliente->getCPF());
				$stmt->bindValue(":cnpj", null);
			}else{
				$stmt->bindValue(":cpf", null);
				$stmt->bindValue(":cnpj", $cliente->getCNPJ());
			}
			$stmt->execute();
		}
	}
}
?>