<?php
$started=session_start();
if(!$started){
	header("Location: register.php");
	exit;
}
if($_SERVER['REQUEST_METHOD']!="POST"){
	header("Location: index.php");
}
$login = $_POST['login'];
$pwd = $_POST['pwd'];
$query = sprintf("SELECT id, name FROM account WHERE name='%s' AND pwd='%s'",
		$login,
		$pwd);
$link = mysql_connect('localhost:3306', 'root', 'root');
$db_selected = mysql_select_db('auction', $link);
if (!$db_selected) {
	echo "db not selected";
	exit;
	//die ('Error: ' . mysql_error());
}
$result = mysql_query($query);
if (!$result) {
	//header("Location: register.php");
	echo "query error\n";
	echo $query;
	exit;
}

$row = mysql_fetch_assoc($result);
if(!$row){
	//header("Location: register.php");
	echo "no rows selected";
	exit;
}

$_SESSION['user_id'] = $row['id'];
$_SESSION['login'] = $row['name'];
mysql_close($link);
$_SESSION['is_open']=true;
header("Location: index.php");
exit;
?>