
<?php 
require_once "../dao/ResponsavelDAO"; 
?>

<?php 
 
// Inicia sessões 
session_start(); 
 
// Recupera o senha 
$e_mail = isset($_POST["e_mail"]) ? addslashes(trim($_POST["e_mail"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? addslashes(trim($_POST["senha"])) : FALSE; 

echo $e_mail;
echo $senha;

// Usuário não forneceu a senha ou o login 
if(!$e_mail || !$senha) 
{ 
    echo "Você deve digitar seu email e senha!"; 
    exit; 
} 

$loginDAO = new ResponsavelDAO();
$rdd = $loginDAO->lista();
echo "  ";
//var_dump($rdd);

$dados = $loginDAO->login($e_mail,$senha);
var_dump($dados);
if($dados) 
{ 
        echo "entrou dados";
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        header("Location: ../view/Portal_Cliente.php"); 
        exit; 
    
} 
    // email inválido 
else
{ 
    echo "O email ou senha fornecido por você é inexistente ou incorreta!"; 
    echo "<meta http-equiv=\"refresh\" content=\"5; URL='../'\"/>";
    exit; 
} 

?>
