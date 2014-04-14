<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Heroe</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js\"></script>
</head>
<body>
<?php
include "before.php";
$name= $_GET ['hero'];
$query = sprintf ( "SELECT  h.name as name,  h.history as history, h.powers as powers, h.picture_descr as picture_descr,
		c.name as firm
		FROM heroe h 
		inner join company c on h.id_company = c.id 
		WHERE h.name='".$name."';");
$link = mysql_connect ( 'localhost:3307', 'root', 'root' );
$db_selected = mysql_select_db ( 'auction', $link );
if (! $db_selected) {
	echo "db not selected";
	exit ();
}
$result = mysql_query ( $query );
if (! $result) {
	echo "query error\n";
	echo $query;
	exit ();
}
$row = mysql_fetch_array ( $result )
?>
</div>
	<div class="content">
		<div>
			<p class="delivery">
				<b> <?php echo $row['name']?> </b> <?php echo $row['history']?>
			</p>
			<img class="detImg" alt=""
				src="<?php echo $row['picture_descr'];?>">
			<h2>
				<b>Powers</b>
			</h2>
			<p class="delivery"><?php echo $row['powers']?></p>
		</div>
	</div>
</div>
<?php include 'after.php';?>
</body>
</html>