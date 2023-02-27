<?php
function CreateUser($username, $password, $usertype = "") {
  // Connect to a MySQL database
    $pdo = new PDO("mysql:host=localhost;dbname=STEM-login;", "root", "");//ansluta till databasen

  // Sanitize inputs to prevent SQL injection
  $user = htmlspecialchars($username);
  $pass = htmlspecialchars($password);
  $userType = $usertype;

  // Prepare SQL statement
  
    $prepared = $pdo->prepare("INSERT INTO users (username, password, user_type) VALUES (:name, :pass, :user_type)");
    
    // Bind values to parameters in statement
    $prepared->bindValue(":name", $user, PDO::PARAM_STR);
    $prepared->bindValue(":pass", $pass, PDO::PARAM_STR);
    $prepared->bindValue(":user_type", $userType, PDO::PARAM_STR);
    
    // Execute statement
    $prepared->execute();
    return $prepared->fetchAll(PDO::FETCH_ASSOC);
    
  }
function SignIntoUser($username, $password) {
  // Connect to a MySQL database
    $pdo = new PDO("mysql:host=localhost;dbname=STEM-login;", "root", "");//ansluta till databasen

  // Sanitize inputs to prevent SQL injection
  $user = htmlspecialchars($username);
  $pass = htmlspecialchars($password);

  // Prepare SQL statement
  $prepared = $pdo->prepare("SELECT username, password FROM users WHERE username = :name AND password = :pass;");

  // Bind values to parameters in statement
  $prepared->bindValue(":name", $user, PDO::PARAM_STR);
  $prepared->bindValue(":pass", $pass, PDO::PARAM_STR);

  // Execute statement
  $prepared->execute();
  return $prepared->fetchAll(PDO::FETCH_ASSOC);
}

function sql($sql, $vals=[]){
    // Create a PDO instance
    $pdo = new PDO("mysql:host=localhost;dbname=STEM-login;", "root", "");//ansluta till databasen
    // Prepare the SQL query
    $q = $pdo->prepare($sql);
    
    // Bind the values to the query
    foreach ($vals as $k => $v) {
        $q->bindValue($k, $v, PDO::PARAM_STR);
    }
    // Execute the query
    $q->execute();
    
    // Return the results
    return $q->fetchAll(PDO::FETCH_ASSOC);
}/*
$pdo = new PDO("mysql:host=localhost;dbname=STEM-login;charset=utf8;", "root", "");//ansluta till databasen
$pdo->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//ifall det är ett error
function sql($sql, $vals = []){//utför påståendet
    global $pdo;
    $q = $pdo->prepare($sql);//förbreder påståendet för att utföras
    foreach($vals as $k => $v) {
        $q->bindParam($k, $vals[$k]);
    }
    $q->execute();// utföra satsen 
    return $q->fetchAll(PDO::FETCH_ASSOC);///hämta alla rader i resultatuppsättningen
}*/
?>