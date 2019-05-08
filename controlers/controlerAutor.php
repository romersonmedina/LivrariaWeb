<?php
require_once('../classes/modelo.inc');
require_once('../dao/autorDAO.inc');

$opcao = (int)$_REQUEST['opcao'];
if($opcao==1){

	$autor=new Autor($_REQUEST['pNome'],$_REQUEST['pEmail'],$_REQUEST['pDataNasc']);

    echo "<p>Pri: ".$_REQUEST['pNome'] ."-". $_REQUEST['pEmail'] ."-". $_REQUEST['pDataNasc'];

	$autorDAO=new AutorDAO();
	echo "<p> Segunda: ". $autor->getNome() ."-". $autor->getEmail() ."-". $autor->getDataNasc();

	$autorDAO->incluirAutor($autor);
	
	header("Location:../controlers/controlerAutor.php?opcao=2");
}
	
if($opcao==2){
	$autor=new AutorDAO();
	
	$lista = $autor->getAutores();
	
	session_start();
	$_SESSION["Lista"]=$lista;
	
	header("Location:../exibirAutores.php");
	
}

if($opcao==3){
	$id = (int)$_REQUEST['id'];
	
	$autorDAO = new AutorDAO();
	$autor = $autorDAO->getAutor($id);
	
	session_start();
	
	$_SESSION['autor'] = $autor;
	
	header("Location:../formAutorAtualizar.php");
	
}

if($opcao==4){
	$autorDAO = new AutorDAO();
	$autorDAO->excluirAutor($_REQUEST['id']);
	header("Location:controlerAutor.php?opcao=2");
}

if($opcao==5){	
	$autorDAO = new AutorDAO();
	$autor=new Autor($_REQUEST['pNome'],$_REQUEST['pEmail'],$_REQUEST['pDataNasc']);
	$autor->setAutor_id($_REQUEST['id_autor']);
	$autorDAO->atualizarAutor($autor);
	header("Location:controlerAutor.php?opcao=2");
	
	
}
?>
