<?php
$severname = "localhost";
$username = "root";
$password = "";
$database = "cafe";

//criação da conexão
$conn = new mysqli($severname, $username, $password, $database);

//verificando conexão
if (!$conn){
    die("conexão falhou".mysqli_connect_error());
}
else{
    ECHO "CONECTO";

}
?>