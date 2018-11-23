<?php
require "OpsBD.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){

$op = htmlspecialchars($_POST["operacao"]);

	if($op == "autenticar"){autenticar($_POST["usuario"], $_POST["senha"]);}
	if($op == "adicionarLogin"){ adicionarLogin($_POST["usuario"], $_POST["senha"]);}
	if($op == "removerLogin"){ removerLogin($_POST["usuario"]);}	
	if($op == "adicionar"){ adicionar($_POST["nome"], $_POST["habilidades"], $_POST["foto"], $_POST["usuario"]);}
	if($op == "remover"){ remover($_POST["nome"]);}
	if($op == "atualizar"){ atualizar($_POST["nome"], $_POST["habilidades"], $_POST["foto"]);}
	if($op == "listar"){ listar();}
	if($op == "pegaMutantesPorPoder"){ pegaMutantesPorPoder($_POST["chave"]);}
	if($op == "pegaMutante"){ pegaMutante($_POST["chave"]);}

}

?>