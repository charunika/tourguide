<?php
$host="localhost";
$email = "email";
$password = "password";

try {
    $conn = new PDO("mysqli:host=$host;dbname=guides", $email, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>