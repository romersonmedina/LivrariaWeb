<?php
	function formatarData($data){
		return date('d/m/YYYY', $data);
	}
	
	session_start();
	$autores=$_SESSION["Lista"];
?>
<html>
<head>
	<title> Página para Exibir Autores </title>
</head>	

<body>
<center>
<h2> Tabela com Autores </h2>

<table border="1">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Email</th>
		<th>Data de Nascimento</th>
		<th>Operação</th>
	</tr>
	
<?php
	foreach($autores as $autor){
		
		echo "<tr>";
		echo "<td>".$autor->autor_id."</td>";
		echo "<td>".$autor->nome."</td>";
		echo "<td>".$autor->email."</td>";
		echo "<td>".formatarData(strtotime($autor->dt_nasc))."</td>";
		echo "<td><a href= 'controlers/controlerAutor.php?opcao=3&id=".$autor->autor_id."'>Alterar</a>&nbsp;";
		echo "<a href=' controlers/controlerAutor.php?opcao=4&id=".$autor->autor_id."'>Excluir</a></td>";
		echo "</tr>";
	}
?>	
</table>


</center>
</body>
</html>