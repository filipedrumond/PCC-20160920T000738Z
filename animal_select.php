<?php
require_once('Classes/Animal.php');
$objAnimal = new Animal();
$table = $objAnimal->listar($_GET);

$qtdeLinhas = mysqli_num_rows($objAnimal->listar($_GET));
$x=0;
?>
<html>
<head>
</head>
<body><?php while($linha = mysqli_fetch_assoc($table)){
	
	?>
	<img src="<?php echo $linha['foto'];?>"/><br>
	<label> <?php echo $linha['cor'];?></label><br>
	<label> <?php echo $linha['porte'];?></label><br>
	<label> <?php echo $linha['raca'];?></label><br>
	<label> <?php echo $linha['sexo'];?></label><br>
	<label> <?php echo $linha['status'];?></label><br>
	<label> <?php echo $linha['data_status'];?></label>
<?php	 
}
?>
</body>	
</html>