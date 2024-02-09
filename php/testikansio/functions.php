<?php
 
function connect() {
    $servername = "patiso23.treok.io";
    $username = "patiso23_sasp";
    $password = "u3r4JIfmmQ80WmcD";
    //$port = 3306;
    $dbname = "patiso23_sasp";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}
 
 