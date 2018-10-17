<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">

	<title>Tela Inicial</title>
		<link rel="stylesheet" type="text/css" href="css/Estilo.css">
</head>
<body>
	<main>
	<header id="cabecalho">
		<h1>MANUTENÇÃO ELETROMECÂNICA</h1>
	</header>
	<nav id="menuTopo">
		<ul id="listaMenuTopo">
			  <li id="botaoMenuTopo" class="dropdown">
			    <a href="javascript:void(0)" class="dropbtn">Cadastros</a>
			    <div class="dropdown-content">
			      <a href="#">Equipamentos</a>
			      <a href="#">Localizações</a>
			      <a href="#">Serviços</a>
			    </div>
			  </li>			
			<li id="botaoMenuTopo"><a href=#>Relatórios</a></li>
			<li id="botaoMenuTopo"><a href=#>Configurações</a></li>
			<li id="botaoMenuTopo"><a href=#>Utilitários</a></li>
			<li id="botaoMenuTopo"><a href=#>Sair</a></li>
		</ul>
	</nav>
	
	<?php
		session_start();
		$logado = $_SESSION['logado'];
		$usuario = $_SESSION['usuario'];

	//Desloga depois de um tempo inativo.
	require("checaAutenticacao.php"); 

	if (isset($_SESSION['logado']) && $_SESSION['logado'] = "true"){
		echo "<h1>Seja bem-vindo ${usuario}!</h1>";
	}
	?>
</main>
</body>

</html>




