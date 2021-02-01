<?php
require_once("../util/Conexao.php");
require_once "../dao/ResponsavelDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

	$responsavelDao = new ResponsavelDAO();
	
	$salvResp = $responsavelDao->criaResponsavel(
		$_POST["nome"],
		$_POST["sobrenome"],
		$_POST["dtNasc"],
		$_POST["cpf"],
		$_POST["email"],
		$_POST["senha"],
		$_POST["endereco"],
		$_POST["numero"],
		$_POST["complemento"],
		$_POST["bairro"],
		$_POST["cidade"],
		$_POST["estado"],
		$_POST["cep"],
		$_POST["celular"],
		$_POST["telefone"],
		$_POST["observacao"]
	);

	if($salvResp){
		$retornoPagina = "ok";
	}else{
		$retornoPagina = "erroSalvar";
	}


echo $retornoPagina;

?>
