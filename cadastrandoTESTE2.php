<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>		
	<?php

	// Pegando valores para enviar para o banco.//
	$email = $_POST['email'];
	$usuario = $_POST['user'];
	$senha = $_POST['senha'];
	$confirmaSenha = $_POST['senha_confirma'];

	// Conexão com o banco //

	$strcon = mysqli_connect('localhost','root','','flashcook') or die('Erro ao conectar');

	//Inserindo os valores do formulário no banco flashcook na tabela usuarios //
	$sql = "INSERT INTO `usuarios`(`email`,`user`,`senha`,`confirmar_senha`) VALUES('$email','$usuario','$senha','$confirmaSenha')";
	mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");
	mysqli_close($strcon);
	echo "Usuário cadastrado com sucesso!";



	?>
	<br>
	<a href="login.html">LOGAR</a>
	<br>
	<a href="cadastro.php">Cadastrar outra conta</a>

</body>
</html>