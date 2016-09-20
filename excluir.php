<?php
session_start(); ?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function ok(){
setTimeout("window.location = 'testes geral.php'", 5 );}
function fail(){
	setTimeout("window.location = 'testes geral.php'",5);
}
</script>
</head>
</html>

<?php
require_once('Classes/Usuario.php');
$objUsuario = new Usuario();
$retorno = $objUsuario->excluir($_POST);
if($retorno){ echo"<script>ok()</script>";	}
else { echo"<script>fail()</script>";	  }
?>