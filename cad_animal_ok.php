<?php
session_start(); ?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function ok(){
setTimeout("window.location = 'index.php'", 5 );}
function fail(){
	setTimeout("window.location = 'cad_animal.php'",5);
}
</script>
</head>
</html>


<?php
require_once('Classes/Animal.php');
$objAnimal = new Animal();
$arrays = array_merge($_FILES , $_POST);
$retorno = $objAnimal->cadastrar($arrays);

if($retorno){
	echo"<script>ok()</script>";	
}
else{
	echo"<script>fail()</script>";	
}
?>