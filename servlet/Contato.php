<?php
require_once "../dao/ContatoDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

if($_POST["btSalvar"]!=null){
	$contatoDao = new ContatoDAO();

	$salvCont = $contatoDao->criaContato($_POST["nome"],$_POST["email"],$_POST["assunto"],$_POST["cidade"],$_POST["estado"],$_POST["observacao"]);
	
	if($salvCont){
		$retornoPagina = "ok";
	}else{
		$retornoPagina = "erroSalvar";
	}
}

echo $retornoPagina;

?>