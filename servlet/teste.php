<?php 
include_once("../util/Globais.php");
require_once("../entidades/Responsavel");
require_once("../dao/ResponsavelDAO");

// Recupera o senha 
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

echo $email;
echo $senha;

$daoLogin = new ResponsavelDAO();
$rdd = $daoLogin->lista();
echo "  ";
//var_dump($rdd);

$dados = $daoLogin->alteraEmail(22,'teste@12');
//var_dump($dados);
echo "\ncazzo\n";
echo $dados;


 ?>

