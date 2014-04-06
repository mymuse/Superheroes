<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js\"></script>
</head>
<body>
<?php

include  "before.php";
printHeader ();
?>
<div class="content">
<?php
$isOk = true;
$email = $_POST['email'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$gender = $_POST['gender'];
if (! preg_match ( "/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
	echo "Invalid email <br>";
	$isOk = false;
}
if (empty ( $name )) {
	echo "Name required<br>";
	$isOk = false;
}
if (strlen ( $pwd ) < 3) {
	echo "Short pasword <br>";
	$isOk = false;
}
if (empty ( $gender )) {
	echo "Gender required";
	$isOk = false;
}

if ($isOk) {
	session_start();
	
	$query = sprintf("insert into account (name,email,pwd,gender) values('%s','%s','%s',%s)",
			$name,
			$email,
			$pwd,
			$gender);
	$link = mysql_connect('localhost:3307', 'root', 'root');
	$db_selected = mysql_select_db('auction', $link);
	if (!$db_selected) {
		echo "db not selected";
		exit;
	}
	$inserted = mysql_query($query);
	if (!$inserted) {
		echo "somethin already exists\n";
		echo $query;
		exit;
	}
	$_SESSION['login'] = $name;
	$_SESSION['id'] = mysql_insert_id();
	echo 'ok';
}
?></div>
<?php
include 'after.php';
?>
	</body>
</html>
