<?php

class GreenHillsDB
{


    static public function getConnection()
    {
        $host = "localhost";
        $dbname = "greenhills";
        $dbUser = "root";
        $dbPassword = "";
        try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUser, $dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}