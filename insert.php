<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}
include_once('./config/conn.php');
//include_once('style.css');
// names of input types from add.html 
if(isset($_POST['save'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    $label = $_POST['label'];
    $enddate=$_POST['end_date'];
}
$sql = $conn -> exec("INSERT INTO todo(title,description,label,status,startdate,enddate) VALUES('$title','$description','$label','Pending',Now(),'$enddate' ) ") OR die("not executed");
if($sql){
     include_once('index.php');
    echo "<script>alert('Successfull inserted!!!');</script>";
   
}
?>
