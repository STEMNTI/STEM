<?php
$pdo = new PDO("mysql:host=localhost;dbname=STEM-login;charset=utf8;", "root", "");//ansluta till databasen
$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ifall det är ett error
function sql($sql, $vals = []){//utför påståendet
    global $pdo;
    $q = $pdo->prepare($sql);//förbreder påståendet för att utföras
    foreach($vals as $k => $v) {
        $q->bindParam($k, $vals[$k]);
    }
    $q-> execute();// utföra satsen 
    return $q->fetchAll(PDO::FETCH_ASSOC);///hämta alla rader i resultatuppsättningen
}
?>