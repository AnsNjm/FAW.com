<?php

$username = "root";
$pass = "";
$host = "localhost";
$db = "faw";
$dsn = "mysql:host=$host;dbname=$db";

try{
    $cnx = new PDO($dsn, $username, $pass);
    if($cnx)
    {
        echo "";
    }
}
catch(PDOException $e){
    $error = $e -> getMessage();
    echo $error;
    exit();
}
?>


