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

$sql = "CREATE TABLE idoso (
nome VARCHAR(200) NOT NULL,
sobrenome VARCHAR(200) NOT NULL,
cpf int (12) NOT NULL,
data_nascimento VARCHAR (10) NOT NULL,
endereco VARCHAR(100) NOT NULL,
numero int (20) NOT NULL,
complemento VARCHAR(150) NOT NULL,
bairro VARCHAR(20) NOT NULL,
cidade VARCHAR(20) NOT NULL,
estado VARCHAR(20) NOT NULL,
cep int (20) NOT NULL,
observacao VARCHAR(3000) NOT NULL)";

if (mysqli_query($conn,$sql)) { echo "Tabela Idoso foi criada com sucesso";
} else {
	echo "Erro na criação da tabela:".mysqli_error($conn);
}
?>