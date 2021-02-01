<?php
require_once "../dao/ResponsavelDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

if($_POST["btRecuperar"]!=null){
	$responsavelDao = new ResponsavelDAO();
	$senhaCorreta = $responsavelDao->validaCpfEmail($_POST["cpf"],$_POST["email"]);

	if($senhaCorreta!=null){
		$senhaGerada = rand();
		$senhaGeradaMd5 = md5(trim($senhaGerada);
		$alterado = $responsavelDao->alteraSenha($_SESSION["id_usuario"],md5(trim($_POST["senhaNova"])));
		if($alterado){
			$retornoPagina = "ok";
		}else{
			$retornoPagina = "erroSalvar";
		}

		if($retornoPagina === "ok"){
			//envia email com a nova senha
			if(false){
				$retornoPagina = "erroEmail";
			}
		}

	}else{
		$retornoPagina="senhaAnterior";
	}
}

echo $retornoPagina;

?>