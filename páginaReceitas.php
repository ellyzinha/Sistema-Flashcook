<?php
include ("conexao.php");

$consulta = "select * from receitas";
$con = $conexao->query($consulta) or die ($conexao->error);
$qry = mysqli_query("select * from receitas");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Receita</title>
	<!-- PAGE settings -->
  <link rel="icon" href="css/dish.png">
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="elegant.css" type="text/css">
  <!-- Script: Make my navbar transparent when the document is scrolled to top -->
  <script src="js/navbar-ontop.js"></script>
  <!-- Script: Animated entrance -->
  <script src="js/animate-in.js"></script>
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
	<?php 
	$num_fields = mysqli_num_fields($qry);

	for($i = 0; $i < $num_fields; $i++){
		$fields[] = mysqli_field_name($qry,$i);
	}
		$table = '<table border = "1"></tr>';

		for($i = 0;$i < $num_fields; $i++){
			$table .= '<th>'.$field[$i].'</th>';
		}

		$table .= '<tbody';
		while($r = mysqli_fetch_array($qry)){
			$table .= '<tr>';
			for($i = 0; $i < $num_fields; $i++){
				$table = '<td>'.$r[$fields[$i]].'</td>';
			}
			$table .= '</tr>';

		}

		$table .= '</body>/table>';

		echo $table;


	?>
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

</body>
</html>