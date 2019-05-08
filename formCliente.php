<html>
<head>
	<title> Formulário de Autor </title>
</head>
<body>
<center>
	<form action= "controlers/controlerCliente.php" method="get"> 

	Digite o cpf do cliente:

	<p><input type="text" size="20" name="pCpf"></p>

	Digite o nome do cliente:

	<p><input type="text" size="50" name="pNome"></p>

	Digite o logradouro do cliente:

	<p><input type="text" size="50" name="pLogradouro" ></p>

	Digite a cidade do cliente:

	<p><input type="text" size="30" name="pCidade" ></p>

	Digite o estado do cliente:

	<p><input type="text" size="10" name="pEstado" ></p>

	Digite o CEP do cliente:

	<p><input type="text" size="10" name="pCep" ></p>

	Digite a data de nascimento do cliente:

	<p><input type="text" size="10" name="pdataNasc" ></p>

	Digite o email do cliente:

	<p><input type="text" size="30" name="pEmail" ></p>

	Digite a senha do cliente:

	<p><input type="password" size="10" name="pSenha" ></p>

	Digite o RG do cliente:

	<p><input type="text" size="10" name="pRg" ></p>

	<input type="submit" value="Enviar">&nbsp &nbsp <input type="reset" value="limpar">

	<input type="hidden" name="opcao" value="1">

	</form>

</center>
</body>
</html>
