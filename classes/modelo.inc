<?php
class Autor{
	private $idAutor;
	private $nome;
	private $email;
	private $dataNasc;


	function Autor($nomeAutor, $emailAutor, $dataNascAutor){
		$this->nome = $nomeAutor;
		$this->email = $emailAutor;
		$this->dataNasc = strtotime(str_replace('/','-',$dataNascAutor));
	}

	public function getAutor_id()
	{
		return $this->idAutor;
	}

	public function setAutor_id($pId)
	{
		 $this->idAutor = $pId;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setNome($pNome)
	{
		return $this->nome = $pNome;
	}

	public function getDataNasc()
	{
		return $this->dataNasc;
	}

	public function setDataNasc($pDataNasc)
	{
		return $this->dataNasc = $pDataNasc;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setEmail($pEmail)
	{
		return $this->email = $pEmail;
	}


}


class Cliente{

private $cpf;
private $nome;
private $logradouro;
private $cidade;
private $estado;
private $cep;
private $data_nascimento;
private $email;
private $senha;
private $rg;

function Cliente($cpfCliente, $nomeCliente, $logradouroCliente, $cidadeCliente, $estadoCliente, $cepCliente, $dataNascCliente, $emailCliente, $senhaCliente, $rgCliente){
	$this->cpf = $cpfCliente;
	$this->nome = $nomeCliente;
	$this->logradouro = $logradouroCliente;
	$this->cidade = $cidadeCliente;
	$this->estado = $estadoCliente;
	$this->cep = $cepCliente;
	$this->data_nascimento = $dataNascCliente;
	$this->email = $emailCliente;
	$this->senha = $senhaCliente;
	$this->rg = $rgCliente;
}

public function getCpf()
{
	return $this->cpf;
}

public function setCpf($pCpf)
{
	 $this->cpf = $pCpf;
}

public function getNome()
{
	return $this->nome;
}

public function setNome($pNome)
{
	$this->nome = $pNome;
}

public function getLogradouro()
{
	return $this->logradouro;
}

public function setLogradouro($pLogradouro)
{
	$this->logradouro = $pLogradouro;
}

public function getCidade()
{
	return $this->cidade;
}

public function setCidade($pCidade)
{
	$this->cidade = $pCidade;
}

public function getEstado()
{
	return $this->estado;
}

public function setEstado($pEstado)
{
	$this->estado = $pEstado;
}

public function getCep()
{
	return $this->cep;
}

public function setCep($pCep)
{
	$this->cep = $pCep;
}

public function getDataNascimento()
{
	return $this->data_nascimento;
}

public function setDataNascimento($pDataNascimento)
{
	$this->data_nascimento = $pDataNascimento;
}

public function getEmail()
{
	return $this->email;
}

public function setEmail($pEmail)
{
	$this->email = $pEmail;
}

public function getSenha()
{
	return $this->senha;
}

public function setSenha($pSenha)
{
	$this->senha = $pSenha;
}

public function getRg()
{
	return $this->rg;
}

public function setRg($pRg)
{
	$this->rg = $pRg;
}





}




?>
