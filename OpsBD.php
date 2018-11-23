<?php

function retorno($retorno){
	header('Content-type: application/json');
	echo(json_encode($retorno));	
}

function autenticar($usuario, $senha){	
	echo true;	
	echo false;
}

function adicionarLogin($usuario, $senha){
	echo false;
	echo true; //nome é primary key
}

function removerLogin($usuario){
	echo false;
	echo true; //nome é primary key
}

function atualizar($nome, $habilidades, $foto, $usuario){
	echo true;	
	echo false;
}

function adicionar($nome, $habilidades, $foto, $usuario){
	echo false;
	echo true; //nome é primary key
}

function remover($nome){
	echo false;
	echo true;
}

function listar(){
	retorno($lista);
}

function pegaMutante($nome){
	retorno($mutante);
}
function pegaMutantesPorPoder(){
	retorno($lista);
}
?>