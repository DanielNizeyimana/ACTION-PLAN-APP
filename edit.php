<?php

// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: login.php');
  exit;
}

include_once('./config/conn.php');
$id = $_GET['id'];
// this will be used to update the datas that was called from the database

// to selecting data from the database using this form that will be edited
$select = $conn->query("SELECT * FROM todo  Where id='$id'");
while ($row = $select->fetch(PDO::FETCH_ASSOC)) {
    $title = $row['title'];
    $description = $row['description'];
    $label = $row['label'];
    $status=$row['status'];
    $enddate = $row['enddate'];
}

?>
<!-- this is a form which will be used to edit/ update -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dashboard | To Do</title>
	<link rel="stylesheet" type="text/css" href="style/tailwind.css">
	<link rel="stylesheet" href="./style/style.css">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="bg-green-100 bgcolor="white">
	<div align="center" class="mt-10 mb-10 shadow p-8 flex-wrap items-center justify-center bg-white-400 py-8">
		<div class="">
			<div>
				<p class="p-4 text-lg font-bold text-green-900">User Dashboard</p>
			</div>
			<div class="flex items-center justify-center" align="center">
				<a href="index.php">
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
						class=" hover:bg-cyane-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white rounded-r shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-user" aria-hidden="true"></i></p>
						<p> Log Out</p>
					</div>
				</a>
			</div>
            <form action="update.php" method="post">
                <h1 class="font-extrabold text-6xl mt-5 mb-3">ADD TASK DETAILS</h1>
                <table>
                    <tr>
                        <td><label for="" class="font-extrabold text-lg">Title</label></td>
                        <td>
                            <input type="text" name="title" id="" placeholder="Enter Title Here" class="p-2 rounded-lg text-center m-2 width" value="<?php echo $title; ?>" />
                            <input type="text" name="id" id="" placeholder="Enter Title Here" class="p-2 rounded-lg text-center m-2 width" value="<?php echo $id; ?> " hidden />
                        </td>
                    </tr>
                    <tr>
                        <td><label for="" class="font-extrabold text-lg">Description</label></td>
                        <td>
                            <textarea name="description" id="" placeholder="Description" class="p-2 rounded-lg text-center m-2 width"><?php echo $description; ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="font-extrabold text-lg">End Date</label></td>
                        <td><input type="date" name="enddate" class="p-2 rounded-lg text-center m-2 width" value="<?php echo $enddate; ?>" /></td>
                    </tr>
                    <tr>
                        <td><label for="" class="font-extrabold text-lg">Label</label></td>
                        <td>
                            <select name="label" class="p-2 rounded-lg text-center m-2 width ">
                                <option <?php if ($label == 'Inbox') {
                                            echo "selected";
                                        } ?> value="Inbox">Inbox</option>
                                <option <?php if ($label == 'Starred') {
                                            echo "selected";
                                        } ?> value="Starred">Starred</option>
                                <option <?php if ($label == 'Important') {
                                            echo "selected";
                                        } ?> value="Important">Important</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="" class="font-extrabold text-lg">Status</label></td>
                        <td>
                            <select name="status" class="p-2 rounded-lg text-center m-2 width ">
                                <option <?php if ($status == 'Pending') {
                                            echo "selected";
                                        } ?> value="Pending">Pending</option>
                                <option <?php if ($status == 'Completed') {
                                            echo "selected";
                                        } ?> value="Completed">Completed</option>
                                <option <?php if ($status == 'Failed') {
                                            echo "selected";
                                        } ?> value="Failed">Failed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="UPDATE TASK" name="update" class="p-2 rounded-lg text-center m-2 mb-5 bg-green-600 font-bold " />
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>