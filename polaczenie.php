<?php

$mysql_host = 'localhost'; 
$port = '3306';
$username = 'root';
$password = '';
$database = 'tsia';

try{
    $pdo = new PDO('mysql:host=' . $mysql_host . ';dbname=' . $database . ';port=' . $port . ";charset=utf8", $username, $password );
    echo('<p>Połączono z bazą danych!</p>');
}

catch(PDOException $e){
    echo('<p>Brak połączenia z bazą danych!</p>');
    die();
}

?>