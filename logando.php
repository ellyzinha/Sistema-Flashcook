<?php
session_start();
include ('conexao.php');

// Se os campos usuário e senha estiverem vazios, volta para a página de login.
if(empty($_POST['user']) || empty($_POST['senha'])){
	header('Location: login.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao,$_POST['user']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select id_user, user from usuarios where user = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['user'] = $usuario;
	header('Location: perfilUser.php');
	exit();
}else{
	header('Location: login.php');
	exit();

}

