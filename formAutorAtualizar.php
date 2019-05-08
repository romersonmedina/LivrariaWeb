<html>
<head>
	<title> Formulário Atualiza Autor </title>
</head>
<body>
<center>
<?php
	function formatarData($data){
		return date('d/m/YYYY', $data);
	}
	
	session_start();
	$autor=$_SESSION['autor'];
?>
	<form action= "controlers/controlerAutor.php" method="get"> 
	
	<input type="hidden" size="3" name="opcao" value="5">
	
	<input type="hidden" name="id_autor" value="<?php echo $autor->autor_id ?>">
	
	Digite o Nome do usuário:
	
	<p><input type="text" size="50" name="pNome" value="<?php echo $autor->nome ?>"></p>
	
	Digite o Email:
	
	<p><input type="text" size="50" name="pEmail" value="<?php echo $autor->email ?>"></p>
	
	Digite a Data de Nascimento:
	
	<p><input type="text" size="20" name="pDataNasc" value="<?php echo formatarData(strtotime($autor->dt_nasc))?>"></p>
	
	<input type="submit" value="Atualizar">&nbsp &nbsp <input type="reset" value="limpar">
	
	
	
	</form>
	
</center>
</body>



</html>