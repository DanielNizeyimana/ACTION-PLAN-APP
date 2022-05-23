<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LogIn | ACTION PLAN</title>	
	<link rel="stylesheet" type="text/css" href="style/tailwind.css">
</head>
<body class="bg-green-100 bg color="white">
	<div class="mt-32 shadow p-8 flex items-center justify-center bg-white-400">
		<div class="p-4 bg-white rounded shadow py-8">
			<form action="authenticate.php" method="post">
				<div class="flex-wrap gap-2 p-8">
					<div class="">
						<p class="font-bold text-xl text-green-600">LOGIN - TO ACTION PLAN APP</p>
					</div>
					<div class="mt-2">
						<input class="border-b border-green-600 px-1 py-2 bg-green-400 text-white focus:outline-none rounded font-bold placeholder-white placeholder-opacity-75" type="text" name="username" id="username" placeholder="Username">
					</div>
					<div class="mt-2">
						<input class="border-b border-green-600 px-1 py-2 bg-green-400 text-white focus:outline-none rounded font-bold placeholder-white placeholder-opacity-75" type="password" name="password" id="password" placeholder="Password">
					</div>
					<div class="mt-2">
						<input type="submit" class="bg-green-600 text-white rounded px-4 py-1 hover:bg-blue-500 " name="Login" value="Sign In">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>