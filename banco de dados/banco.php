<?php


// script conexão e criação de Banco de dados 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn){
	die("Connection failed: ".mysqli_connect_error());
}
else{
	echo "Conexão feita com sucesso";
}

$sql = "CREATE DATABASE TCC";
if (mysqli_query($conn, $sql)) { echo "Banco de dados criado com sucesso";} 
else { echo "Erro na criação do banco de dados: ".mysqli_error($conn);
}
mysqli_close($conn);


?>