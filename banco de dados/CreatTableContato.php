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

$sql = "CREATE TABLE contato (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(200) NOT NULL,
e_mail VARCHAR (100) NOT NULL,
assunto VARCHAR (1000) NOT NULL,
cidade VARCHAR(20) NOT NULL,
estado VARCHAR(20) NOT NULL,
observacao VARCHAR(3000) NOT NULL,
reg_date TIMESTAMP)";

if (mysqli_query($conn,$sql)) { echo "Tabela Contato foi criada com sucesso";
} else {
	echo "Erro na criação da tabela:".mysqli_error($conn);
}
?>