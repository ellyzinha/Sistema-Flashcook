<?php
if(isset($_POST['nome'])&&isset($_POST['ingrediente'])){
$nome = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$ingrediente = filter_input(INPUT_POST, 'ingrediente',FILTER_SANITIZE_STRING);
$autor = filter_input(INPUT_POST, 'autor',FILTER_SANITIZE_STRING);
$preparo = filter_input(INPUT_POST, 'preparo',FILTER_SANITIZE_STRING);
$nivel = filter_input(INPUT_POST, 'nivel',FILTER_SANITIZE_STRING);
$arquivo= $_FILES['arquivo'];



try{
  $conexao= new PDO('mysql:host=localhost;dbname=flashcook',"root","");

  $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

   $extensao = strtolower(substr($_FILES['arquivo']['nome'],-4)); //pega a extensao do arquivo
   $novo_nome = md5(time()).$extensao;//define o nome do arquivo
   $diretorio = "upload/";//define o diretorio para onde enviaremos o arquivo
   move_uploaded_file($_FILES['arquivo']['tmp_name'],$diretorio.$novo_nome); //efetua o upload

  $stmt =$conexao->prepare("insert into receitas(nome,autor,preparo,nivel,ingredientes,imagem) values(?,?,?,?,?,'$novo_nome')");

  $stmt->bindParam(1,$nome);
  $stmt->bindParam(2,$autor);
  $stmt->bindParam(3,$preparo);
  $stmt->bindParam(4,$nivel);
  $stmt->bindParam(5,$ingredientes);
  $stmt->execute();
  echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=adicionarReceitas.php"/>';
  echo "Dados Inseridos";

  
  
}catch(PDOException $e){
  echo $e->getCode(); echo $e->getMessage();
}
}
?>