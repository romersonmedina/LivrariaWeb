<html>
<head>
	<title> Formulário de Autor </title>
</head>
<body>
<center>
	<form action= "controlers/controlerAutor.php" method="get">

	Digite o Nome do Autor:

	<p><input type="text" size="50" name="pNome"></p>

	Digite o Email:

	<p><input type="text" size="50" name="pEmail"></p>

	Digite a Data de Nascimento:

	<p><input type="text" size="20" name="pDataNasc" ></p>

	<input type="submit" value="Enviar">&nbsp &nbsp <input type="reset" value="limpar">

	<input type="hidden" name="opcao" value="1">

	</form>

</center>
</body>
</html>
