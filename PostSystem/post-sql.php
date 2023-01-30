<?php
require("../config.php");

$dsn = "mysql:host=". host . ";dbname=" . dbname . ";charset=utf8";

$pdo = new PDO($dsn, username, password); //Conectar till databasen firstdb
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Ändrar en attribute på databasen i detta fallet ändrar vi errormode till exception
function sql($sql, $valslista = []) {
    global $pdo;
    try {
        $quarry = $pdo->prepare($sql);
        foreach($valslista as $k => $v) { // Lopar igenom all k keys och all v values i arayn vals
            $quarry->bindParam($k, $valslista[$k]);
        }
        $quarry->execute(); //Kör koden
        return $quarry->fetchAll(PDO::FETCH_ASSOC); //Hämtar koden
    } catch (Exception $err) {
        print_r($err);
    }
    
}
?>