<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang =pt-br">
	<head>
		<meta charset ="utf-8">
		<title> CRUD- Cadastrar</title>
	</head>
	<body>
		<h1>Cadastrar Usuário</h1>
		<?php
		//IF(isset($_SESSION['msg'])){
		//	echo$_SESSION['msg'];
		//	unset($_SESSION['msg']);
		//	}
		?>
		<form  method= "POST" action ="processa.php">
			<label> Nome:</label>
			<input type= "text" name="nome" placeholder="digite o nome completo"><br><br>
		
			<label>E-mail:</label>
			<input type= "email" name="email" placeholder="digite o seu e-mail"><br><br>
			
			<input type= "submit"  value="Cadastrar">
		</form>
	</body>
<html>