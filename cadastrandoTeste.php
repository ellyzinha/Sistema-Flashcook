<?php
// Pegando valores para enviar para o banco.//
	$email = $_POST['email'];
	$usuario = $_POST['user'];
	$senha = $_POST['senha'];
	$confirmaSenha = $_POST['senha_confirma'];

try{
	$conexao = new PDO('mysql:host=localhost; dbname = flashcook',"root","ifpe1234");

	$conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


	$stmt = $conexao->prepare("INSERT INTO usuarios (email,user,senha,confirmar_senha) VALUES(?,?,?,?)");

	$stmt->bindParam(1,$email);
	$stmt->bindParam(2,$usuario);
	$stmt->bindParam(3,$senha);
	$stmt->bindParam(4,$confirmaSenha);

	$stmt->execute();

	echo "Cadastrado com Sucesso";

}catch(PDOException $e){
	echo $e->getCode(); echo $e->getMessage();
}