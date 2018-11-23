<?php

function conectar(){
	$host="localhost";
	$db="mutantesws";
	$usuario="root";
	$senha="";

	try{
		$con = new PDO("mysql:host=".$host.";dbname=".$db, $usuario,$senha); 
		return $con;		
	}catch(PDOException $e){
		echo($e);
		die();
	}
}

?>