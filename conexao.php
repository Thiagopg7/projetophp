<?php
class BancoDados{
	public static function conectar(){
		try{
			return new PDO('mysql:host=localhost;dbname=ProjetoWebServidor;charset=utf8', 'root', '');
		}  catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}
?>