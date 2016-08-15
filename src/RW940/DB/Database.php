<?php 
namespace RW940\DB;

class Database{
	protected $config;
	public function __construct(){
		$this->config = parse_ini_file(__DIR__ ."/../../../config.ini", false);
	}
	public function connect(){
		$pdo = new \PDO("mysql:host={$this->config['host']};dbname={$this->config['dbname']}",
			$this->config['user'],
			$this->config['pass'],
			[
			\PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION
			]);
		return $pdo;

	}
	public function raw_connect(){
		$pdo = new \PDO("mysql:host={$this->config['host']};",
			$this->config['user'],
			$this->config['pass'],
			[\PDO::ATTR_ERRMODE  => \PDO::ERRMODE_EXCEPTION]);
		return $pdo;
	}
	
}

?>