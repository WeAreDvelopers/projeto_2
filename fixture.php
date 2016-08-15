<?php 
require_once __DIR__ . "/autoload.php";
use RW940\DB\Database;
use RW940\DB\ClientePersister;
use RW940\Cliente\Types\PessoaFisica;
use RW940\Cliente\Types\PessoaJuridica;


$db = new Database();
try{
	$pdo = $db->raw_connect();

	// DROP DATABASEcast
	$query = "DROP DATABASE IF EXISTS `pdo_rw940`";
	$pdo->exec($query);

	// CREATE DATABASE
	$query = "CREATE DATABASE `pdo_rw940`";
	$pdo->exec($query);

	// SELECT DATABASE
	$query = "USE `pdo_rw940`";
	$pdo->exec($query);

	$query = "CREATE TABLE clientes(
		id INT (11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(255) NOT NULL,
		email VARCHAR(255) NOT NULL,
		endereco VARCHAR(255) NOT NULL,
		numero VARCHAR(255) NOT NULL,
		complemento VARCHAR(255) NOT NULL,
		bairro VARCHAR(255) NOT NULL,
		cidade VARCHAR(255) NOT NULL,
		estado VARCHAR(255) NOT NULL,
		cep VARCHAR(255) NOT NULL,
		endereco_cobranca VARCHAR(255)  NULL,
		numero_cobranca VARCHAR(255)  NULL,
		complemento_cobranca VARCHAR(255)  NULL,
		cep_cobranca VARCHAR(255)  NULL,
		classificacao VARCHAR(255) NOT NULL,
		cpf VARCHAR(255)  NULL,
		cnpj VARCHAR(255)  NULL,
		data_cadastro TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP
		)";
$pdo->exec($query);


for ($i=1; $i <= 5; $i++) { 
	${"cliente".$i} = new RW940\Cliente\Types\PessoaFisica();
	${"cliente".$i}->setId("$i")
	->setNome("Cliente $i")
	->setCPF("111.111.111-$i")
	->setEmail("cliente$i@dominio$i.com.br")
	->setEndereco("Rua $i")
	->setNumero("00$i")
	->setComplemento("Casa")
	->setBairro("bairro $i")
	->setCidade("cidade $i")
	->setEstado("UF$i")
	->setCep("00.000-0$i")
	->setClassificacao(rand(0,5));
	$arrayClientes[] = ${"cliente".$i};
}

for ($i=6; $i <= 10; $i++) { 
	${"cliente".$i} = new RW940\Cliente\Types\PessoaJuridica();
	${"cliente".$i}->setId("$i")
	->setNome("Cliente $i")
	->setCNPJ("42.169.422/0001-$i")
	->setEmail("cliente$i@dominio$i.com.br")
	->setEndereco("Rua $i")
	->setNumero("00$i")
	->setComplemento("Casa")
	->setBairro("bairro $i")
	->setCidade("cidade $i")
	->setEstado("UF$i")
	->setCep("00.000-0$i")
	->setClassificacao(rand(0,5))
	->setEnderecoCobranca("Rua $i")
	->setNumeroCobranca("00$i")
	->setComplementoCobranca("Casa")
	->setBairroCobranca("bairro $i")
	->setCidadeCobranca("cidade $i")
	->setEstadoCobranca("UF$i")
	->setCepCobranca("00.000-0$i");
	$arrayClientes[] = ${"cliente".$i};
}

$persister = new ClientePersister($pdo);
$persister->persist($cliente1)
->persist($cliente2)
->persist($cliente3)
->persist($cliente4)
->persist($cliente5)
->persist($cliente6)
->persist($cliente7)
->persist($cliente8)
->persist($cliente9)
->persist($cliente10)
->flush();


echo "Fixtures executadas com sucesso!\n";
}catch(\PDOException $ex) {
	echo "Erro: {$ex->getMessage()}";
}
?>