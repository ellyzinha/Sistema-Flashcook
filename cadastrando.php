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
	$senha = MD5($_POST['senha']);
	$confirmaSenha = MD5($_POST['senha_confirma']);

	// Conexão com o banco //

	$strcon = mysqli_connect('localhost','root','ifpe1234','flashcook') or die('Erro ao conectar');

	$query_select = "SELECT `user` FROM `usuarios` WHERE `user` = '$usuario'";
	$select = mysqli_query($query_select,$strcon);
	$array = mysqli_fetch_array($select);
	$userarray = $array['user'];

	if($usuario == "" || $usuario == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='cadastro.php';</script>";
 
    }else{
      if($userarray == $usuario){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='cadastro.php';</script>";
        die();
 
      }else{
      	$sql = "INSERT INTO `usuarios`(`email`,`user`,`senha`,`senha_confirma`) VALUES('$email','$usuario','$senha','$confirmaSenha')";
		$insert = mysqli_query($strcon,$sql) or die("Erro ao tentar cadastrar registro");

		mysqli_close($strcon);
        if($insert){
        	echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
      }
    }

	

	?>
	<br>
	<a href="login.html">LOGAR</a>
	<br>
	<a href="cadastro.php">Cadastrar outra conta</a>

</body>
</html>