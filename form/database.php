<?php>

require_once 'conf/config.php';


$dsn = "mysql:host=$servername;dbname=$dbname;port=$port";

class Database {
    function __constructor() {
        Global $dsn;
        Global $password;
        Global $username;
        Global $userstable;
        $this->username = $username;
        $this->password = $password;
        $this->dsn = $dsn;
        $this->userstable = $userstable;
    

    function connect($dsn, $username, $password) {
        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            $error = "Error: " . $e->getMessage();
            return $error;
        }}

        $this->conn = connect($this->dsn, $this->username, $this->password);
        }

    public function dbconnect() {
        return $this->conn;

}}
