<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
try{
    $conn = new PDO("mysql:host=$hostname;dbname=todo",$username,$password);
    
    
    // if($conn){
    //     echo " Successfully connected";
    // }
    
}
catch(PDOException $e){
    echo $e -> getMessage();
}
?>