<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="function.js"></script>
  <!-- pingendo css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="elegant.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
	<title>Cadastro</title>
</head>
<body>

  <!-- Navbar -->
 <nav class="navbar-expand-md navbar-dark bg-dark navbar fixed-top">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar3SupportedContent" aria-controls="navbar3SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbar3SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link text-light" href="index.html"><b>FLASHCOOK</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#menu"><b>RECEITAS</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="quemSomos.html"><b>QUEM SOMOS</b></a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="login.html"><b>LOGIN</b></a>
      </div>
    </div>
  </nav>

  <!-- Caixa de Cadastro -->
	
<div class="align-items-center d-flex photo-overlay py-5 cover" style="background-image: url(imgs/receita.jpg);">
  <div class="container">
  <div class="d-flex justify-content-center h-100">
    <div class="card">
      <div class="card-header">
        <h3>Cadastro</h3>
      </div>
      <div class="acomodar">
      <div class="card-body">
        <form name="dados" method="post" action="cadastrandoTeste.php" onsubmit="return validarEmail();">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-at"></i></span>
            </div>
            <input type="text" name="email" id="email" class="form-control" placeholder="email" maxlength="150" size='65' required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="user" class="form-control" placeholder="nome de usuário" required>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua Senha" required>
          </div>
           <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" id="confirma_senha" name="senha_confirma" class="form-control" placeholder="Confirmar senha" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Cadastrar" class="btn float-right login_btn">
            <br>
          </div>
        </form>
      </div>
         <div class="card-footer">
        <div class="d-flex justify-content-center links">
          Já possui uma conta?<a href="login.html">Login</a>
        </div>
      </div>
      </div>
     
    </div>
  </div>
</div>

  <!-- Funcão Javascript para confirmação de senha -->

  <script>
    var senha = document.getElementById("senha"), confirma_senha = document.getElementById("confirma_senha");

    function validarSenha(){
      if(senha.value != confirma_senha.value){
        confirma_senha.setCustomValidity("Senhas diferentes!");  
      }else {
        confirma_senha.setCustomValidity('');
      }
    }

    senha.onchange = validarSenha;
    confirma_senha.onkeyup = validarSenha;
  </script>

  <!-- Função javascript para validar email -->

  <script language="Javascript">
    function validarEmail(){
      if(document.dados.email.value=="" || document.dados.email.value.indexOf('@')==-1 || document.dados.email.value.indexOf('.')==-1){
        email.setCustomValidity("Preencha o campo e-mail corretamente!");
      }else {
        email.setCustomValidity('');
      }
    }

    email.onkeyup = validarEmail;
    
  </script>



	

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>