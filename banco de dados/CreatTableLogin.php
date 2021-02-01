
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

$sql = "CREATE TABLE Login (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
e_mail VARCHAR(50) NOT NULL,
senha VARCHAR(20) NOT NULL,
reg_date TIMESTAMP)";

if (mysqli_query($conn,$sql)) { echo "Tabela Login foi criada com sucesso";
} else {
	echo "Erro na criação da tabela:".mysqli_error($conn);
}
?>