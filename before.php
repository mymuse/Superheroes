<?php
function printHeader($title,$init){
	echo("<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\"><html><head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"><title>");
echo($title);
echo("</title><link rel=\"stylesheet\" type=\"text/css\" href=\"styles/style.css\"><script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js\"></script><script src=\"js/all.js\"/></head><body");
echo(" onload=\"");
echo($init);
echo("\"");
echo("><div class=\"header\"><img class=\"design\" alt=\"\"src=\"images/design.png\"><img class=\"nameOrg\" alt=\"\"src=\"images/name_org.jpg\"></div><div class=\"nav\"><a href=\"index.php\"><img src=\"images/nav_home.jpg\"></a><a href=\"catalog.php\"><img src=\"images/nav_catalog.jpg\"></a><a href=\"delivery.php\"><img src=\"images/nav_delivery.jpg\"></a></div>");
}

function printFooter(){
	echo ("<br><div class=\"sign\">Superheroes Auction © 2014 <br>by Alena Chuchalina & Ivan Kar<div class=\"sign_info\">Chuchalina Alena<br>Ivan Kar</div></div></body></html>");
}
?>