<?php
require_once "../dao/IdosoDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

if($_POST["btSalvar"]!=null){
	$idosoDao = new IdosoDAO();
	$salvIdo = $idosoDao->criaIdoso($_POST["nome"],$_POST["sobrenome"],$_POST["cpf"],$_POST["dtNasc"],$_POST["endereco"],$_POST["numero"],$_POST["complemento"],$_POST["bairro"],$_POST["cidade"],$_POST["estado"],$_POST["cep"]);
	
	if($salvIdo){
		$retornoPagina = "ok";
	}else{
		$retornoPagina = "erroSalvar";
	}
}

echo $retornoPagina;

?>