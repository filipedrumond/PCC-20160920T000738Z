<?php
session_start(); ?>


<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<script type="text/javascript">
function ok(){
setTimeout("window.location = 'index.php'", 5 );}
function fail(){
	setTimeout("window.location = 'login_wa.php'",5);
}
</script>
</head>
</html>


<?php
require_once('Classes/Usuario.php');
require_once('Classes/Cliente.php');
$objUsuario = new Usuario();
$objCliente = new Cliente();


$dados = ($objUsuario->listar($_POST));
var_dump($dados);
$linha = mysqli_fetch_assoc($dados);
$cod_usuario = $linha['cod_usuario'];
echo $cod_usuario;
$qtdeLinhas = mysqli_num_rows($dados);
echo $qtdeLinhas;

var_dump($_SESSION);


$dadosC = $objCliente->listar_c($cod_usuario);
$linhaC = mysqli_fetch_assoc($dadosC);
$cod_cliente = $linhaC['cod_cliente'];
echo $cod_cliente;



if($qtdeLinhas == 1 ){
	$_SESSION['login'] = $_POST['login'];
	echo"<script>ok()</script>";
	$_SESSION["login"]=$_POST['login'];
	$_SESSION["cod_usuario"]=$cod_usuario;
	$_SESSION["cod_cliente"]=$cod_cliente;
}
else {
	echo "<script>fail()</script>";
}
?>