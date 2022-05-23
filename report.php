<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Dashboard | ACTION PLAN</title>
	<link rel="stylesheet" type="text/css" href="style/tailwind.css">
	<link rel="stylesheet" href="style/style.css">
	<link href="fontawesome/css/all.css" rel="stylesheet">
</head>

<body class="bg-green-100 bg color="white">
	<div align="center" class="mt-32 mb-10 shadow p-8 flex-wrap items-center justify-center bg-white-400 py-8">
		<div class="">
			<div>
      <p class="p-4 text-4xl font-bold text-green-900">HELP YOURSELF WITH ACTION PLAN- APP</p>
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
						class=" hover:bg-green-600 hover:text-white border border-white cursor-pointer text-green-600 p-4 bg-white rounded-r shadow text-lg px-16  py-8">
						<p class="text-center text-2xl "><i class="fa fa-user" aria-hidden="true"></i></p>
						<p> Log Out</p>
					</div>
				</a>
			</div>
    <div class="">
      <form action="report.php" method="POST">
        <select name="status" class="p-2 rounded-lg text-center m-2">
          <option value="Pending">Pending</option>
          <option value="Completed">Completed</option>
          <option value="Failed">Failed</option>
        </select>
        <input type="submit" value="Search" name="search" class="px-4 py-2 rounded mr-2"><input type="button" value="Print" onclick="printDiv()" class="px-4 py-2 rounded mr-2"> 
      </form>
      
    </div>
    <div class="" id="GFG">
      <p class=" text-lg text-green-900 font-bold text-center mb-5">Report based on Label</p>
      <?php

      include_once('./config/conn.php');
if (isset($_POST['search'])) {
 $status = $_POST['status'];

      

      $sql = "SELECT * FROM todo WHERE status='$status'";

      if ($sql) {
      ?>

        <table width="100%">
          <tr align="left" class="text-green-900">
            <th>ID</th>
            <th>TITLE</th>
            <th>DESCRIPTION</th>
            <th>LABEL</th>
            <th>START ON</th>
            <th>ENDS ON</th>
          </tr>
          <?php
          foreach ($conn->query($sql) as $row) {
          ?>
            <tr class="text-green-900">
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['description']; ?></td>
              <td><?php echo $row['label']; ?></td>
              <td><?php echo $row['startdate']; ?></td>
              <td><?php echo $row['enddate']; ?></td>
            </tr><?php
                } ?>
        </table><?php } }?>
    </div>
  </div>
  </div>
</body>
</html>
    <!-- Script to print the content of a div -->
    <script>
        function printDiv() {
            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=500, width=500');
            a.document.write('<html>');
            a.document.write('<body>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>

    