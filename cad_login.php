<?php
session_start(); ?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function ok(){
setTimeout("window.location = 'testes geral.php'", 5000000 );}
function fail(){
	setTimeout("window.location = 'login.php'",5000000);
}
</script>
</head>
</html>


<?php
require_once('Classes/Usuario.php');
require_once('Classes/Cliente.php');
$_SESSION["email"]=$_POST['email'];
$objUsuario = new Usuario();
$retorno = $objUsuario->cadastrar($_POST);
if($retorno){
	echo"<script>ok()</script>";	
}
else{
	echo"<script>fail()</script>";	
}
?>