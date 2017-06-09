<?php
//database
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "krantenwijk";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo "Er is een probleem met de verbinding! <br>";
    echo $e;
}