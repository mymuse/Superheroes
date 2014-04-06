<?php
function printHeader() {
	echo ("<div class=\"header\"><img class=\"design\" alt=\"\" src=\"images/design.png\">");
	$started = session_start();
	$login = $_SESSION['login'];
	if (!empty($login)) {
		echo ("
	<div class=\"signIn\">You are logged in as ");
		echo($login);
	echo("<br><form action=\"logout.php\"><input type=\"submit\" value=\"Logout\"></form>
	</div>");
	} else {
		echo ("<form class=\"signIn\" method=\"POST\" action=\"login.php\">
		Login:<input type=\"text\" name=\"login\"><br> Password:<input
			type=\"password\" name=\"pwd\"> <input type=\"submit\"
			value=\"Login\"><input type=\"button\"
			onclick=\"window.location = 'register.php';\" value=\"Register\" />
	</form>");
	}
	echo ("	<img class=\"nameOrg\" alt=\"\" src=\"images/name_org.jpg\">
</div><div class=\"nav\"><a href=\"index.php\"><img src=\"images/nav_home.jpg\"></a><a href=\"catalog.php\"><img src=\"images/nav_catalog.jpg\"></a><a href=\"delivery.php\"><img src=\"images/nav_delivery.jpg\"></a></div>");
}
function printFooter() {
	echo ("<br><div class=\"sign\">Superheroes Auction © 2014 <br>by Alena Chuchalina & Ivan Kar<div class=\"sign_info\">Chuchalina Alena<br>Ivan Kar</div></div>");
}
?>