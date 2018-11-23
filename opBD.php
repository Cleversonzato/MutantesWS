<?php
require BD.php;

function retorno($retorno){
	header('Content-type: application/json');
	echo(json_encode($retorno));	
}

function autenticar($usuario, $senha){	
	$con = conectar();
	$user = $con->query('SELECT * from usuarios where nome = "'.$usuario'" AND senha = "'.$senha'"');
	if($user) {
		echo(true);		
	}else{
	echo(false);
	}
}

function adicionarLogin($usuario, $senha){
	$con = conectar();
	if($user = $con->query('INSERT INTO usuarios(nome, senha) VALUES ("'.$usuario.'","'.$senha.'")'){
		echo(true);
	}else {echo(false);}
}

function removerLogin($usuario){
	$con = conectar();
	if($user = $con->query('DELETE FROM usuarios WHERE nome = "'.$usuario.'"'){
	}
}

function adicionar($nome, $habilidades, $foto, $usuario){
	$con = conectar();
	if($user = $con->query('INSERT INTO mutantes(nome, foto, usuario) VALUES ("'.$nome.'","'.$foto.'","'.$usuario.'")'){
		foreach($habilidades as $habilidade){
			$con->query('INSERT INTO poderes(nome, mutante) VALUES ("'.$habilidade.'","'.$nome.'")')
		}
		echo(true);
	}else {echo(false);}
}

function remover($nome){
	$con = conectar();
	if($user = $con->query('DELETE FROM mutantes WHERE nome = "'.$nome.'"'){
	}
}

function atualizar($nome, $habilidades, $foto, $usuario){
	remover($nome);
	adicionar($nome, $habilidades, $foto, $usuario);
}

function listar(){
	$con = conectar();
	foreach($con->query('SELECT * from mutantes') as $mutante){
		echo($mutante);
	}
}

function pegaMutante($nome){
	$con = conectar();
	$mutante = $con->query('SELECT * from mutantes where nome = "'.$nome.'"');
	echo($mutante);
}
function pegaMutantesPorPoder($poder){
	$con = conectar();
	foreach($con->query('SELECT nome from Poderes where nome="'.$poder.'"') as $poder){
		echo($poder);
	}
}
?>