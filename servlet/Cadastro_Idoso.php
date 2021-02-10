<?php
require_once("../util/Conexao.php");
require_once ("../dao/IdosoDAO");

?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

	$idosoDAO = new IdosoDAO();

	$salvResp = $idosoDAO->criaIdoso(
		$_POST["nome"],
		$_POST["sobrenome"],
		$_POST["cpf"],
		$_POST["data_nascimento"],
		$_POST["endereco"],
		$_POST["numero"],
		$_POST["complemento"],
		$_POST["bairro"],
		$_POST["cidade"],
		$_POST["estado"],
		$_POST["cep"],
		$_POST["observacao"]);


		if($salvResp){
			$retornoPagina = "ok";
		}else{
			$retornoPagina = "erroSalvar";
		}
	
	
	echo $retornoPagina;
	
?>