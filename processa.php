<?php
session_start();


include_once("conexao.php");

$NOME = filter_input(INPUT_POST, 'nome',FILTER_SANITIZE_STRING);
$EMAIL = filter_input(INPUT_POST, 'email',FILTER_SANITIZE_EMAIL);


//echo "nome:$NOME<br>";
//echo "e-mail:$EMAIL<br>";
 $result_usuario = "INSERT INTO user(nome, email ,created) VALUES ( '$NOME', '$EMAIL', NOW())";
 $resultado_usuario= mysqli_query($conn, $result_usuario);

 if(mysqli_insert_id($conn)){
	 $_SESSION['msg'] = "Usuario cadastrado com sucesso";
		header("location: index.php");
 }else{
	 $_SESSION['msg'] = "Usuario cadastrado com sucesso 2";
		header("location: index.php");
 }
		