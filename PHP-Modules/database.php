<?php

require_once 'config/config.php';

$dsn = "mysql:host=" . DB_HOSTNAME . ";dbname=" . DB_NAME . ";port=". DB_PORT;

function Database($dsn, $username, $password): PDO|string
{
            try {
                $conn = new PDO($dsn, $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conn;
            } catch (PDOException $e) {
                print_r("Error: " . $e->getMessage());
                return ("Error: " . $e->getMessage());
            }



}



$conn = Database($dsn, DB_USERNAME, DB_PASSWORD);

