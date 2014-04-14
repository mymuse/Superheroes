<div class="header">
	<img class="design" alt="" src="images/design.png">

<?php
$started = session_start ();
$login = $_SESSION ['login'];

$query_buid = "SELECT gender from account WHERE name = '" . $login . "';";
$query = sprintf ( $query_buid );
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
$row = mysql_fetch_array ( $result );
if ($row [0] == "0")
	echo ("<link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style_girl.css\">");
?>
<?php

if (! empty ( $login )) {
	?>
	<div class="signIn">You are logged in as 
		<?php echo($login)?>
	<br>
		<form action="logout.php">
			<input type="submit" value="Logout">
		</form>
		<a href="<?php echo "bets.php"; ?>";">My Bets</a>
	</div>
	<?php
} else {
	?>
		<form class="signIn" method="POST" action="login.php">
		Login:<input type="text" name="login"><br> Password:<input
			type="password" name="pwd"> <input type="submit" value="Login"><input
			type="button" onclick="window.location = 'register.php';"
			value="Register" />
	</form>
	<?php }?>
	<img class="nameOrg" alt="" src="images/name_org3.png">
</div>
<div class="nav">
	<a href="index.php"><img src="images/nav_home.jpg"></a><a
		href="catalog.php"><img src="images/nav_catalog.jpg"></a> <a
		href="delivery.php"><img src="images/nav_delivery.jpg"></a>
</div>
