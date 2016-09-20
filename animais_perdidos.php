<?php
require_once('Classes/Animal.php');
$objAnimal = new Animal();
$table = $objAnimal->lista();
$x = 0;
?>
<html>
<head>
</head>
<body>
<html>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
.texto{
	margin-top: 0px;
	margin-left:0px;
	font-size: 12px;
	color: #FFFFFF;
	font-weight: bold;
}
#texto{
	color: #FFFFFF;
	font-weight: bold;
}
.img1{margin-top:-20px;margin-left:0px;}
.img2{margin-top:-20px;margin-left:0px;}
.img3{margin-top:-20px;margin-left:0px;}

.img4{margin-top:30px;margin-left:0px;}
.img5{margin-top:30px;margin-left:0px;}
.img6{margin-top:30px;margin-left:0px;}

.img7{margin-top:30px;margin-left:0px;}
.img8{margin-top:30px;margin-left:0px;}
.img9{margin-top:30px;margin-left:0px;}

.img10{margin-top:30px;margin-left:0px;}
.img11{margin-top:30px;margin-left:0px;}
.img12{margin-top:30px;margin-left:0px;}

.panelloco {position : float ;}
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


<div class="container">
<div id=texto>
  <h2>Ultimos animais perdidos:</h2>
 
</div>

<div class="panel-body">
<div class="row">
<div class="col-sm-4">
<form action="listanimal.php" method="GET">
	 <nav class="col-xs-2">
	 <div class="form-group">
            <label>Cor:</label>
            <input type="text" name="cor" value="">
	</div>
	<div class="form-group">
             <label width="300">Codigo da Coleira:</label>
            <input type="text" name="cod_coleira" value="">
	</div>
	<div class="form-group">
			<label>Raça:</label>
           <input type="text" name="raca" value="">
	</div>
	<br> <button type="submit" class="btn btn-success">Pesquisar</button>
	</nav>
</form>
</div>
<?php 	
	while($linha = mysqli_fetch_assoc($table)){

	?>
	<div class="panelloco">
	<div class="col-sm-4 col-xs-6">
      	<div class="panel panel-default">
          <div class="panel-thumbnail"><a href="href="http://localhost/PCC/animal_select.php?cod_animal=<?php echo $linha['cod_animal']?>" title="<?php echo $linha['raca'];?>"><img src="<?php echo $linha['foto'];?>" class="img-responsive"></a></div>
          <div class="panel-body">
            <p>  //SEXO : <?php echo $linha['sexo'];?><BR>
				STATUS : <?php echo $linha['status'];?>
				//DATA : <?php echo $linha['data_status'];?> <BR><BR></a></p>
            <p></p>
            
          </div>
        </div>	
	</div>
	</div>
	
	<?php  }/*
	<div class="img1">
	<div class="col-sm-4">
	<fieldset>
	<img src="<?php echo $linha['foto'];?>" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">  <P>   </P>
	<a href="http://localhost/PCC/animal_select.php?cod_animal=<?php echo $linha['cod_animal']?>"class ="textos">RAÇA : <?php echo $linha['raca'];?>
	   //SEXO : <?php echo $linha['sexo'];?><BR>
	   STATUS : <?php echo $linha['status'];?>
	   //DATA : <?php echo $linha['data_status'];?> <BR><BR></a>
	</fieldset>
	</div>
	</div>

<?php	 
} /*
?>
<div class="col-sm-4">
<div class="img1">
	<img src="imagens/ImagemPerdido/1.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >PINSCHER - Femêa <br>Perdido em: 25/07/2016 </a>
</div>
</div>

<div class="col-sm-4">
<div class="img2">
	<img src="imagens/ImagemPerdido/2.png" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >SHIH TZU - Macho <br>Perdido em: 24/07/2016 </a>
</div>
</div>
 
<div class="col-sm-4">
<div class="img3">
	<img src="imagens/ImagemPerdido/3.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Macho <br>Perdido em: 24/07/2016 </a>
</div>
</div>

<div class="col-sm-4">
<div class="img4">
	<img src="imagens/ImagemPerdido/4.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) <br>Macho - Perdido em: 12/07/2016 </a>
</div>
</div>
 
<div class="col-sm-4">
<div class="img5">
	<img src="imagens/ImagemPerdido/5.PNG" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >PIT BULL - Femêa <br>Perdido em: 23/07/2016 </a>
</div>
</div>

<div class="col-sm-4">
<div class="img6">
	<img src="imagens/ImagemPerdido/6.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Macho <br>Perdido em: 16/07/2016 </a>
</div>
</div>
 
   <div class="col-sm-4">
<div class="img7">
	<img src="imagens/ImagemPerdido/7.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Macho <br>Perdido em: 21/07/2016 </a>
</div>
</div>
 
<div class="col-sm-4">
<div class="img8">
	<img src="imagens/ImagemPerdido/8.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Macho <br>Perdido em: 17/07/2016 </a>
</div>
</div>
 
<div class="col-sm-4">
<div class="img9">
	<img src="imagens/ImagemPerdido/9.jpeg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >Border Collie - Macho <br>Perdido em: 25/07/2016 </a>
</div> 
</div>
 
<div class="col-sm-4">
<div class="img10">
	<img src="imagens/ImagemPerdido/10.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Macho <br>Perdido em: 27/07/2016 </a>
</div> 
</div>
 
<div class="col-sm-4">
<div class="img11">
	<img src="imagens/ImagemPerdido/11.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >VIRA LATA (SRD) - Femêa <br>Perdido em: 13/07/2016 </a>
</div> 
</div>
 
<div class="col-sm-4">
<div class="img12">
	<img src="imagens/ImagemPerdido/12.jpg" alt="Imagem como Thumbnail" class="img-responsive" width="304" height="304">
	<a href="inicio.php" class="texto" >Basset/Dachshund - Macho <br>Perdido em: 10/07/2016 </a>
</div> 
</div> 
<?php */?>
 
</div>
  </div>

</div>


</body>	

</html>