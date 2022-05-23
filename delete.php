<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}

include_once('./config/conn.php');
// getting id from select when delete link is pressed
$id=$_GET['id'];
$sql="DELETE FROM todo WHERE id='$id'";
$query=$conn->exec($sql);
header('location:view.php');
echo "<script>alert('Successfull Deleted!!!');</script>";
?>