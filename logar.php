<?php

//Pega os valores dos campos de login e senha.
$usuario = $_POST['usuario'] ?? null;
$senha = $_POST['senha'] ?? null;


//Conectando ao Banco de Dados.
require ("conexao.php");
$bd = BancoDados::conectar();

//Executa a query para encontrar se existe usuário e senha no banco de dados
$queryLogin = $bd->prepare("SELECT * FROM SMIFN WHERE FN_CODIGO = '${usuario}' AND SENHA = '${senha}'");
$queryLogin -> execute();
$usuario = $queryLogin -> fetch();

//Realiza o login
if (isset($usuario['FN_CODIGO']) && isset($usuario['SENHA'])) {
	session_start();
	$_SESSION['logado'] = "true";
	$_SESSION['usuario'] = $usuario['FN_CODIGO'];
	$_SESSION['senha'] = $usuario['SENHA'];
} else {
	echo "<script>alert('Dados incorretos!');";
	echo "window.location='login.html';</script>";
}

if (isset($_SESSION['logado']) && $_SESSION['logado'] = "true"){
	header("Location: telaInicial.php");
} else {
	echo "<script>alert('Dados incorretos!');";
	echo "window.location='login.html';</script>";
}

?>