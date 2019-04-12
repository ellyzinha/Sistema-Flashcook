<!DOCTYPE html>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>	
<?php
	$email = $_POST['email'];
	$user = $_POST['user'];
	$senha = $_POST['senha'];
	$senhaConfirma = $_POST['senha_confirma'];

	try{
		$conexao = new PDO('mysql:host=localhost;dbname=flashcook',"root","ifpe1234");

		$conexao->setAtrribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		$stmt =$conexao->prepare("insert into usuarios(email,user,senha,senha_confirma") values('$email','$user','$senha','$senha_confirma'));

		$stmt->bindParam(1,$email);
		$stmt->bindParam(2,$user);
		$stmt->bindParam(3,$senha);
		$stmt->bindParam(4,$senha_confirma);

		$stmt->execute();

	} catch(PDOException $e){
		echo 'ERROR: '.$e->getMessage();
	}

?>

</body>
</html>