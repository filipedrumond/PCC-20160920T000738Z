

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	 <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
 
 
 <style>
  
body{ 
background-image: url(imagens/fundo1.png); 
background-attachment: fixed;
background-repeat: no-repeat; 
} 
 
 label{

	color: #FFFFFF;
	font-weight: bold;
}
  
h1{

	color: #FFFFFF;
	font-weight: bold;
}
teste{
	margin-top: 0px;
	margin-left:0px;
	position : absolute;

}

p {color:blue;}
</style>

 
</head>

<body>

<div class="container">
<div class="row">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
	  <ul class="nav navbar-nav">
	  <li><img src = "imagens/logou.png" width = 150 height = 50></li>
	  <li><a href="index.php">Home</a></li>
      <li><a href="animais_perdidos.php">Animais perdidos</a></li>
      <li><a href="dicas.php">Dicas</a></li> 
      <li><a href="cad_animal.php">Cadastro de animais	</a></li> 
	  <li><a href="cad_coleirra.php">Cadastro de coleiras</a></li> 
	 
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="testes_geral.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login_wa.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
</div>

<div id="test">
<div class="container">
<div class="row">
 <nav class="col-sm-offset-0">
 <div class="img1">
<img src="imagens/img2.png" class="img-responsive" alt="Cinque Terre"  width="1180" height="236">
</div>
</nav>
</div>
</div>
</div>



<div class="container-fluid">

<nav class="col-md-offset-5">
<fieldset>
	<form name="cad_coleirra" method="POST" action="cad_coleirra_ok.php">

		<h1>Cadastro da coleira:</h1> <br />

	
		
		<label> Codigo: </label>
		<input type="text" name="codigo"/><br /> <br />
		
		

		<input type="submit" value="Cadastrar"/>
		<br /> <br />
		
	</form>
</fieldset>
	
</div>
	</nav>	
</body>

</html>