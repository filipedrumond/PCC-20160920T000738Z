<?php
if(isset($_POST['cod_coleira'])){
	$cod_coleira   = $_POST['cod_coleira'];
	$cor = $_POST['cor'];	
	$raca = $_POST['raca'];
}else{
	$cod_coleira   = '';
	$cor = '';	
	$raca = '';		
}

?>


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
	 
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
	</head>

  
 <style>
 
 
 
 
 body {
    background-color: #e6ffff;
}




label{
	margin-top: 0px;
	margin-left:0px;
	width : 800px;
	color: #000000;
	font-weight: bold;
}



teste{
	margin-top: 0px;
	margin-left:0px;
	position : absolute;

}

mechama{
	margin-top: 300px;
	margin-left:0px;
}


#mae3{
	margin-top: -400px;
	margin-left:720px;
	position : relative;
	
}




bloco7{
	margin-top:-400px;
	margin-left: 540px;
	position : absolute;
	width : 375px;
 }

 
.slider {
   margin-top:0px;
	margin-left:-40px;
}

.img1 {
   margin-top:-20px;
	margin-left: 0px;
}

.img2 {
   margin-top:10px;
   margin-left: -200px;
   position: absolute;
}

.img3 {
   margin-top:-210px;
   margin-left: 400px;
   position: absolute;
}

.img4 {
   margin-top:5px;
	margin-left: -15px;
	position: absolute;
}


#mae1{
	margin-top: 340px;
	margin-left:0px;
	position : absolute;
	
}


.img5 {
   margin-top:0px;
	margin-left: 440px;
	position : absolute;
}

.img6 {
   margin-top:0px;
	margin-left: -200px;
	position : absolute;
}


</style>
 
 
</head>

<body >


<div class="container">
<div class="row">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
  
	  <ul class="nav navbar-nav">
	  <li><img src = "imagens/logou.png" width = 150 height = 50></li>
	  <li><a href="#">Home</a></li>
      <li><a href="animais_perdidos.php">Animais perdidos</a></li>
      <li><a href="dicas.php">Dicas</a></li> 
      <li><a href="cad_animal.php">Cadastro de animais	</a></li> 
	  <li><a href="cad_coleirra.php">Cadastro de coleiras</a></li> 
	  <li><a href="testes_geral.php">Logar</a></li> 
	  
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</div>
</div>


<div id="test">
<div class="container">
<div class="row">
 <nav class="col-xs-offset-0">
 <div class="img1">
<img src="imagens/img2.png" class="img-responsive" alt="Cinque Terre"  width="1180" height="236">
</div>
</nav>
</div>
</div>
</div>



<div id="test">
<div class="container">
<div class="row">
<div class="col-md-4">
<form action="list_aluno_3C2.php" method="POST">
	 <nav class="col-xs-2">
	
	<div class="form-group">
            <label>Cor:</label>
            <input type="text" name="cor" value="<?php echo $cor;?>">
	</div>
	
	<div class="form-group">
             <label width="300">Codigo da Coleira:</label>
            <input type="text" name="cod_coleira" value="<?php echo $cod_coleira;?>">
	</div>
	
	<div class="form-group">
			<label>Raça:</label>
           <input type="text" name="raca" value="<?php echo $raca;?>">
	</div>
	
	<br> <button type="submit" class="btn btn-success">Pesquisar</button>
	
	</nav>
</div>

<div class="col-xs-1">
<nav class="col-xs-offset-0">
 <div class="img6">
<img src="imagens/compre.png" class="img-responsive"  width="500" height="100">
</div>
</nav>



</div>
</div>
</div>
</div>


<div id="mae1">
<div class="container">
<div class="row">
  <nav class="col-xs-0">
	<div class="img1">
		<img src="imagens/funcio.png" class="img-responsive"  width="600" height="236">
	</div>
	

  </nav>
  
   <nav class="col-xs-1">
	<div class="img4">
		<img src="imagens/compre.png" class="img-responsive"  width="300" height="100">
	</div>
  </nav>
   <div class="col-sm-2">
      </div>

  <nav class="col-xs-9">
	<div class="img3">
		<img src="imagens/viaja.jpg" class="img-responsive"   width="515" height="100">
	</div>
  </nav>

  </nav>


</div>
</div>
</div>
</div>
</div>
</div>









</div>


























</body>	

</html>