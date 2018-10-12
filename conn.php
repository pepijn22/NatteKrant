<?php
$servername = "databases.aii.avans.nl";
$username = "pwjschon";
$password = "Ab12345";

try {
    $conn = new PDO("mysql:host=$servername;dbname=pwjschon_db2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    //echo "Connection failed: " . $e->getMessage();
    }
?>
