
<?php 
require_once "../dao/ResponsavelDAO"; 
?>

<?php 
 
// Inicia sessões 
session_start(); 
 
// Recupera o senha 
$email = isset($_POST["email"]) ? addslashes(trim($_POST["email"])) : FALSE; 
// Recupera a senha, a criptografando em MD5 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE; 

echo $email;
echo $senha;

// Usuário não forneceu a senha ou o login 
if(!$email || !$senha) 
{ 
    echo "Você deve digitar seu email e senha!"; 
    exit; 
} 

$loginDAO = new ResponsavelDAO();
$rdd = $loginDAO->lista();
echo "  ";
//var_dump($rdd);

$dados = $loginDAO->login($email,$senha);
var_dump($dados);
if($dados) 
{ 
        echo "entrou dados";
        // TUDO OK! Agora, passa os dados para a sessão e redireciona o usuário 
        $_SESSION["id_usuario"]= $dados["id"]; 
        $_SESSION["nome_usuario"] = stripslashes($dados["nome"])." ".stripslashes($dados["sobrenome"]); 
        $_SESSION["permissao"]= $dados["postar"]; 
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
