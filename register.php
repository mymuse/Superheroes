<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Register</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js\"></script>
</head>
<body>
<?php include $_SERVER['DOCUMENT_ROOT']."\before.php";
printHeader();?>
	<div class="content">

		<form class="register_form" onsubmit="return validRegister(this)" action="registered.php" method="POST">
			<p>
			</p>
						<p>
				Email: <input name="email" type="text">
			</p>
			<p>
				Name: <input name="name" type="text">
			</p>
			<p>
				Password: <input name="pwd" type="password">
			</p>
			<p>
				<input name="gender" type="radio" value="true" checked>Male<br>
				<input name="gender" type="radio" value="false">Female
			</p>
			<input type="submit" value="Register">
		</form>

	</div>
<?php printFooter();
	?>
	</body>
	</html>
