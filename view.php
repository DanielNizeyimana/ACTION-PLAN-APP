<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}
include_once('./config/conn.php');

$sql = "SELECT * FROM todo";

if($sql){

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dashboard | Action Plan</title>
	<link rel="stylesheet" type="text/css" href="style/tailwind.css">
	<link rel="stylesheet" href="style/style.css">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="bg-blue-100" bgcolor="white">
	<div align="center" class="mt-32 mb-10 shadow p-8 flex-wrap items-center justify-center bg-white-400 py-8">
		<div class="">
			<div>
			<p class="p-4 text-4xl font-bold text-black-900">HELP YOURSELF WITH ACTION PLAN-APP</p>
			</div>
			<div class="flex items-center justify-center" align="center">
				<a href="inde.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white rounded-l shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-plus-square" aria-hidden="true"></i></p>
						<p> Add Task</p>
					</div>
				</a>
				<a href="view.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-tasks" aria-hidden="true"></i></p>
						<p> View Task</p>
					</div>
				</a>
				<a href="report.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-file" aria-hidden="true"></i></p>
						<p> Report</p>
					</div>
				</a>
				<a href="login.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white rounded-r shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-user" aria-hidden="true"></i></p>
						<p> Log Out</p>
					</div>
				</a>
			</div>
        <div class="mt-10">
		<p class=" text-lg text-black-900 font-bold text-center mb-5">View & Modify Details</p>
            <table class="" width="100%">
                <tr class="ml-5 gap-2" align="left">
                    <th>No</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Label</th>
                    <th>Status</th>
                    <th>Start</th>
                    <th>End</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php
                foreach($conn -> query($sql) as $row){
                if ($row>1) {
                   
                ?>
                <tr class="m-2 gap-2">
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['description'];?></td>
                    <td><?php echo$row['label'];?></td>
                    <td><?php echo $row['status'];?></td>
                    <td><?php echo $row['startdate'];?></td>
                    <td><?php echo $row['enddate'];?></td>
                    <td><?php echo"<a href=\"edit.php? id=$row[id]\"><i class=\"fa fa-edit\"></i> </a>"?></td>
                    <td><?php echo"<td><a href=\"delete.php?id=$row[id]\" on click=\"return (are you sure you want to delete)\"><i class=\"fa fa-trash text-red-400\"></i></a></td>"?></td>
                </tr>
                <?php }else{
                      echo"<script>alert('No Data found');</script>";
                }
            }
            ?>
            </table><?php }?>
        </div>
    </div>
</body>
</html>