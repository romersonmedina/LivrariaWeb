<?php
include_once 'conexao.inc';
include_once '../classes/modelo.inc';

class AutorDAO{
	private $con;
	
	function AutorDao(){
		$c = new Conexao();
		$this->con = $c->getConexao();
	}
	
	public function incluirAutor(Autor $autor){
		$sql = $this->con->prepare("insert into autores (nome, email, dt_nasc) values (:nom, :em, :data)");
		
		echo "<p> Autor para incluir: ".$autor->getNome() ."-". $autor->getEmail() ."-". $autor->getDataNasc();
		$sql->bindValue(':nom', $autor->getNome());
		$sql->bindValue(':em', $autor->getEmail());
		$sql->bindValue(':data', $this->converteData($autor->getDataNasc()));
		echo "<p> data convertida: ".$this->converteData($autor->getDataNasc());
		$sql->execute();
	}
	
	function converteData($data){
		return date('Y-m-d',$data);
	}
	
	public function getAutores(){
		$rs = $this->con->query("SELECT*FROM autores");
		
		$lista=array();
		while($autor=$rs->fetch(PDO::FETCH_OBJ)){
			$lista[]=$autor;
		}
		return $lista;
	}
	
	public function excluirAutor($id){
		$sql = $this->con->prepare("DELETE FROM autores WHERE autor_id = :id");
		$sql->bindValue(':id', $id);
		$sql->execute();
	}
	
	public function getAutor($id){
		$sql = $this->con->prepare("SELECT*FROM autores WHERE autor_id= :id");
		$sql->bindValue(':id',$id);
		$sql->execute();
		
		return $sql->fetch(PDO::FETCH_OBJ);
	}
	
	public function atualizarAutor(Autor $autor){
		$sql = $this->con->prepare("update autores set nome = :nom, email= :em, dt_nasc= :data where autor_id= :id");
		$sql->bindValue(':nom', $autor->getNome());
		$sql->bindValue(':em', $autor->getEmail());
		$sql->bindValue(':data', $this->converteData($autor->getDataNasc()));
	}
}





?>
