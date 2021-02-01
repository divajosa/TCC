<?php
require_once "../dao/ResponsavelDAO";
?>

<?php 
 
// Inicia sessões 
session_start();

$retornoPagina = false;

if($_POST["btAlterar"]!=null){
	$responsavelDao = new ResponsavelDAO();
	$senhaCorreta = $responsavelDao->isSenhaUsuario($_SESSION["id_usuario"],$_POST["senhaAnterior"]);

	if($senhaCorreta){
		if($_POST["senhaNova"]===$_POST["senhaConf"]){
			//
			$alterado = $responsavelDao->alteraSenha($_SESSION["id_usuario"],md5(trim($_POST["senhaNova"])));
			if($alterado){
				$retornoPagina = "ok";
			}else{
				$retornoPagina = "erroSalvar";
			}
		}else{
			$retornoPagina="confirmaSenha";
		}
	}else{
		$retornoPagina="senhaAnterior";
	}
}

echo $retornoPagina;

?>