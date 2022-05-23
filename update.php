<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}
include_once('./config/conn.php');
if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $titleu = $_POST['title'];
    $descriptionu = $_POST['description'];
    $labelu = $_POST['label'];
    $enddateu = $_POST['enddate'];
    $statusu=$_POST['status'];
    $sql = "UPDATE `todo` SET `title`='$titleu', `description`='$descriptionu',`label`='$labelu',`status`='$statusu',`enddate`='$enddateu' WHERE `id`='$id'";
    $query=$conn->exec($sql);
    if ($query) {
         header('location:view.php');
       echo"success";
    }
    else {
        echo"Failed";
        print_r($conn->errorInfo());
    }
    
}
?>