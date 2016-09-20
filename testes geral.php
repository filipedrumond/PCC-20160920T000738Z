<?php
session_start();

?>
<html>
<head>
</head>
<body>
	<fieldset>
		<form name="cad_login" method="POST" action="cad_login.php">
			<label>E-mail : </label>
			<input type="text" name="login"/><br /> <br />
			
			<label>Senha : </label>
			<input type="text" name="senha"/> 
			
			<label>Confirmar Senha : </label>
			<input type="text" name="senha2"/> 
			
			<input type="submit" value="Cadastrar"/>
		</form>
	</fieldset>
	<fieldset>
		<form name="login" method="POST" action="login.php">
			
			<label>E-mail : </label>
			<input type="text" name="login"/><br /> <br />
			
			<label>Senha : </label>
			<input type="text" name="senha"/> 
			 
			<input type="submit" value="Listar"/>
		</form>
	</fieldset>
		<fieldset>
		<form name="del_usu" method="POST" action="excluir.php">

			<label>Codigo_usu : </label>
			<input type="text" name="cod_usuario"/> 
			 
			<input type="submit" value="Excluir"/>
		</form>
	</fieldset>
	<fieldset>
			<form action="cad_animal.php" method="POST" enctype="multipart/form-data">
				<label>Codigo Da Coleira</label>
				<input type = "text" name="cod_coleira" id="cod_coleira" class=""></br>
				<label>Foto</label>
				<input type = "file" name="foto" id="foto" class=""></br>
				<label>Cor</label>
				<input type = "text" name="cor" id="cor" class=""></br>
				<label>Porte</label>
				<input type = "text" name="porte" id="porte" class=""></br>
				<label>Raca</label>
				<input type = "text" name="raca" id="raca" class=""></br>
				<label>Sexo</label>
				<input type = "text" name="sexo" id="sexo" class=""></br>
				<label>Status</label>
				<input type = "text" name="status" id="status" class=""></br>
				
				<br> <br> <input type= "submit" value="Cadastrar" class="botao">
		</form>
	</fieldset>
	<fieldset>
			<form action="animal_select.php" method="GET" enctype="multipart/form-data">
				<label>Cod_animal</label>
				<input type = "text" name="cod_animal" id="foto" class="">
				<br> <br> <input type= "submit" value="Mostrar" class="botao">
		</form>
	</fieldset>
</body>
</html>