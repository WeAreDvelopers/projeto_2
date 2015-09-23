<?php 
require_once "Cliente.php";
for($i=1; $i<= 10; $i++){
$cliente = new Clientes();
$cliente->setNome("Cliente " . $i)
		->setCpf("123.456.789-".$i)
		->setEmail("cliente".$i."@teste.com.br")
		->setEndereco("Rua Teste ".$i)
		->setNumero("10".$i)
		->setComplemento('Ap 20' .$i)
		->setBairro('Bairro '.$i)
		->setCidade("Cidade ".$i)
		->setEstado("Estado ".$i)
		->setCep("12.200-00".$i);

	$arrayClientes[] = array(
		$cliente->getNome(),
		$cliente->getCpf(),
		$cliente->getEmail(),
		$cliente->getEndereco(),
		$cliente->getNumero(),
		$cliente->getComplemento(),
		$cliente->getBairro(),
		$cliente->getCidade(),
		$cliente->getEstado(),
		$cliente->getCep(),
	);


}
echo '<ul>';
ksort($arrayClientes);
foreach ($arrayClientes as $key => $val) {
	echo '<li><a href="'.$key.'">'.$val[0].'</a></li>';
}
echo '</ul>';
?>