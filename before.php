<div class="header">
	<img class="design" alt="" src="images/design.png">

<?php
$started = session_start ();
$login = $_SESSION ['login'];
if (! empty ( $login )) {
	?>
	<div class="signIn">You are logged in as 
		<?php echo($login)?>
	<br>
		<form action="logout.php">
			<input type="submit" value="Logout">
		</form>
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
	<img class="nameOrg" alt="" src="images/name_org.jpg">
</div>
<div class="nav">
	<a href="index.php"><img src="images/nav_home.jpg"></a><a
		href="catalog.php"><img src="images/nav_catalog.jpg"></a> <a
		href="delivery.php"><img src="images/nav_delivery.jpg"></a>
</div>
