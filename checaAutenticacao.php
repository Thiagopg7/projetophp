<?php

$segundosDeslogar = 10; // Deslogar se a última requisição for maior que X segundos

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $segundosDeslogar)) {
    
    session_unset(); 
    session_destroy();

    echo "<script>alert('Você permaneceu inativo mais que ${segundosDeslogar} segundos e foi deslogado!');";
	echo "window.location='login.html';</script>";
}
$_SESSION['LAST_ACTIVITY'] = time();

?>