<!DOCTYPE html>
<html>
<head>
	<title>LOGAR</title>
</head>
<body>
	<?php
	// session_start inicia a sessão //
	session_start();
	// recebem os dados da página login.html //
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	// Conexão com o banco //

	$strcon = mysqli_connect('localhost','root','','flashcook') or die('Erro ao conectar');

	// A variavel $result pega as varias $login e $senha,// 
	//faz uma pesquisa na tabela de usuarios //

	$result = mysqli_query("SELECT user,senha FROM `usuarios` WHERE `user` = '$login' AND `senha` = '$senha'");
	/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi 
	bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
	será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do 
	resultado ele redirecionará para a página site.php ou retornara  para a página 
	do formulário inicial para que se possa tentar novamente realizar o login */

	if(mysqli_num_rows($result) > 0){
		$_SESSION['login'] = $login;
		$_SESSION['senha'] = $senha;
		header('location:perfil.php');
	}else {
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		header('location:login.php')
	}

	?>
</body>
</html>