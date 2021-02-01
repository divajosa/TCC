
<?php
// script criação de Tabelas de banco de dados 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TCC";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE TABLE Responsavel (id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(50) NOT NULL,
sobrenome VARCHAR(200) NOT NULL,
data_nascimento VARCHAR(12) NOT NULL,
cpf int (13) NOT NULL,
sexo VARCHAR(20) NOT NULL,
e_mail VARCHAR(20) NOT NULL,
senha VARCHAR (20) NOT NULL,
endereco VARCHAR(100) NOT NULL,
numero int (20) NOT NULL,
complemento VARCHAR (50) NOT NULL,
bairro VARCHAR(30) NOT NULL,
cidade VARCHAR(30) NOT NULL,
estado VARCHAR(20) NOT NULL,
cep int (20) NOT NULL,
celular1 VARCHAR(20) NOT NULL,
celular2 VARCHAR(20) NOT NULL,
telefone_fixo VARCHAR(20) NOT NULL,
observacao VARCHAR(3000) NOT NULL,
reg_date TIMESTAMP)";

if (mysqli_query($conn,$sql)) { echo "Tabela Responsavel foi criada com sucesso";
} else {
	echo "Erro na criação da tabela:".mysqli_error($conn);
}
?>