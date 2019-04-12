<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Receitas</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="add.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- PAGE settings -->
  <link rel="icon" href="css/dish.png">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="elegant.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
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
            <a class="nav-link" href="receitas.html"><b>RECEITAS</b></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="quemSomos.html"><b>QUEM SOMOS</b></a>
          </li>
        </ul>
        <a class="btn navbar-btn btn-secondary mx-2" href="login.html"><b>LOGIN</b></a>
      </div>
    </div>
  </nav>

  <div class="container">
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Receita</strong><span></span></h4>
                <div class="form">
                <form onsubmit="Checkfiles(this);" action="adicionando_produto.php" method="post" enctype="multipart/form-data">
                    <input type="text" required placeholder="Nome da Receita" value="" name="nome" class="txt">
                    <textarea placeholder="Digite os Ingredientes" name="ingredientes" type="text" class="txt_3"></textarea>
                    <input type="text" required="" placeholder="Autor da Receita" value="" name="autor" class="txt">
                    <select name="nivel">
                      <option selected>Nivel da Receita</option>
                    	<option value="Fácil">Fácil</option>
                    	<option value="Normal">Normal</option>
                    	<option value="Elaborada">Elaborada</option>
                    </select>
                    <input type="file" required name="arquivos" id="filename" class="btn btn-sucess" accept="image/png, image/jpeg" multiple="" style="padding:20px;">
                    
                	 <textarea placeholder="Escreva o Modo de Preparo" name="preparo" type="text" class="txt_3"></textarea>
                     <input type="submit" value="Enviar" name="submit" class="txt2">
                </form>
            </div>
            </div>
            </div
	</div>
</div>

  <div class="container">
    <footer class="footer-area" style="position: fixed;text-align: center;position: relative;width: 100%;height: 100%;">
      <p style="font-size: 12px;font-family: 'Roboto',sans-serif;">&copy; Flashcook 2018-2019. Todos os direitos Reservados.</p>
      <div class="social-icons"> 
                <a href="https://www.facebook.com/"><i id="social-fb" class="fa fa-facebook-square fa-2x social"></i></a>
                <a href="https://twitter.com/"><i id="social-tw" class="fa fa-twitter-square fa-2x social"></i></a>
              <a href="https://plus.google.com/"><i id="social-gp" class="fa fa-google-plus-square fa-2x social"></i></a>
              <a href="mailto:bootsnipp@gmail.com"><i id="social-em" class="fa fa-envelope-square fa-2x social"></i></a>
          </div>
    </footer>
  </div>

  <script type="text/javascript">
  	function Checkfiles(){
  		var fup = document.getElementById('filename');
  		var fileName = fup.value;
  		var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

  		if(ext == "jpeg" || ext == "png"){
  			return true;
  		}else {
  			return false; 		}
  	}
  </script>
</body>
</html>