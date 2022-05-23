<!DOCTYPE html>
<html>
	<?php
	Session_start();
	// If the user is not logged in redirect to the login page...
	if (!isset($_SESSION['loggedin'])) {
	  header('Location: login.php');
	  exit;
	}
	?>

<head>
	<meta charset="utf-8">
	<title>Dashboard | ACTION PLAN</title>
	<link rel="stylesheet" type="text/css" href="style/tailwind.css">
	<link rel="stylesheet" href="./style/style.css">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="bg-green-100" bgcolor="white">
	<div align="center" class="mt-10 mb-10 shadow p-8 flex-wrap items-center justify-center bg-white-400 py-8">
		<div class="">
			<div>
				<p class="p-4 text-4xl font-bold text-black-900">HELP YOURSELF WITH ACTION PLAN-APP</p>
			</div>
			<div class="flex items-center justify-center" align="center">
				<a href="#">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white rounded-l shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-plus-square" aria-hidden="true"></i></p>
						<p> Add Tasks</p>
					</div>
				</a>
				<a href="view.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-tasks" aria-hidden="true"></i></p>
						<p> View Tasks</p>
					</div>
				</a>
				<a href="report.php">
					<div
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-file" aria-hidden="true"></i></p>
						<p> Reports</p>
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
			<form action="insert.php" method="post">
				<h1 class="font-extrabold text-lg mt-5 text-black-900 mb-3">ADD TASK DETAILS</h1>
				<table>
				  <tr>
					<td><label for="" class="font-extrabold text-lg text-black-900">Title</label></td>
					<td>
					  <input
						type="text"
						name="title"
						id=""
						placeholder="Enter Title Here"
						class="p-2 rounded-lg text-center m-2 width"
					  />
					</td>
				  </tr>
				  <tr>
					<td><label for="" class="font-extrabold text-lg text-black-900">Description</label></td>
					<td>
					  <textarea
						name="description"
						id=""
						placeholder="Description"
						class="p-2 rounded-lg text-center m-2 width"
					  ></textarea>
					</td>
				  </tr>
				  <tr>
					<td><label class="font-extrabold text-lg text-black-900">End Date</label></td>
					<td><input type="date" name="end_date" class="p-2 rounded-lg text-center m-2 width"/></td>
				  </tr>
				  <tr>
					<td><label for="" class="font-extrabold text-lg text-black-900">Label</label></td>
					<td>
					  <select name="label" class="p-2 rounded-lg text-center m-2 width ">
						<option value="Inbox">Inbox</option>
						<option value="Starred">Started</option>
						<option value="Important">Important</option>
					  </select>
					</td>
				  </tr>
				  <tr>
					<td colspan="2" align="center">
					  <input type="submit" value="ADD TASK" name="save"  class="py-2 px-3 rounded-lg text-center m-2 mb-5 bg-black-600 font-bold "  />
					</td>
				  </tr>
				</table>
			  </form>
		</div>


	</div>
</body>

</html>