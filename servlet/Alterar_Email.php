<?php
require_once "../dao/ResponsavelDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

if($_POST["btAlterar"]!=null){
	$responsavelDao = new ResponsavelDAO();
	$emailCorreto = $responsavelDao->isEmailUsuario($_SESSION["id_usuario"],$_POST["emailAnterior"]);

	if($emailCorreto){
		if($_POST["emailNovo"]===$_POST["emailConf"]){
			//
			$alterado = $responsavelDao->alteraEmail($_SESSION["id_usuario"],$_POST["emailNovo"]);
			if($alterado){
				$retornoPagina = "ok";
			}else{
				$retornoPagina = "erroSalvar";
			}
		}else{
			$retornoPagina="confirmaEmail";
		}
	}else{
		$retornoPagina="emailAnterior";
	}
}

echo $retornoPagina;

?>