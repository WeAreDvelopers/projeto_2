<?php
require_once "config/conexaoDB.php";

echo "### EXECUTANDO FIXTURE<br>";

$conn = conexaoDB();

echo "Removendo tabela<br>";
$conn->query("DROP TABLE IF EXISTS tcap;");
$conn->query("DROP TABLE IF EXISTS adm_user;");
echo " - OK<br>";
echo "Criando tabela<br>";
$conn->query("CREATE TABLE `tcap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fundo` varchar(300) DEFAULT NULL,
  `data_cota` varchar(100) DEFAULT NULL,
  `cota` varchar(100) DEFAULT NULL,
  `dia_perc` varchar(100) DEFAULT NULL,
  `mes_perc` varchar(100) DEFAULT NULL,
  `ano_perc` varchar(100) DEFAULT NULL,
  `12m_perc` varchar(100) DEFAULT NULL,
  `24m_perc` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
);");
$conn->query("CREATE TABLE adm_user (
	id_user INT NOT NULL AUTO_INCREMENT,
	`login` varchar(300) DEFAULT NULL,
  	`password` varchar(300) DEFAULT NULL,
	PRIMARY KEY(id_user));");
echo " - OK\n";

		$login = 'titan';
		$senha = password_hash("#tit@n!",PASSWORD_DEFAULT);
		$smt = $conn->prepare("INSERT INTO adm_user (login, password) VALUE(:login, :password);");
		$smt->bindParam(":login",$login);
		$smt->bindParam(":password",$senha);
		$smt->execute();
echo "##### CONCLÚIDO ####";




?>