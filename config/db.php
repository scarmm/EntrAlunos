<?php 
$host = "localhost";
$db_name = "entralunos";
$db_user = "root";
$db_password = "";

$token = "dango"; // salt 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
    // echo "conexão bem sucedida";
} catch (PDOException $e){
    echo $e->getMessage();
}