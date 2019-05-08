<?php

class conexao
{
	private $servidor_mysql='localhost';
	private $nome_banco='livraria';
	private $usuario='root';
	private $senha=''; //no lab da ufes >'123456'
	private $con;

	public function getConexao(){
		$this->con= new PDO("mysql:host=$this->servidor_mysql;dbname=$this->nome_banco","$this->usuario","$this->senha");
		return $this->con;
	}
}


?>
