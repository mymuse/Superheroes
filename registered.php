<?php include $_SERVER['DOCUMENT_ROOT']."\Superheroes\before.php";
printHeader("Registration","");?>
<div class="content">
<?php
	$isOk = true;
	if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['email'])){
		echo "Invalid email <br>";
		$isOk = false;
	}
	if(empty($_POST['name'])){
		echo "Name required<br>";
		$isOk = false;
	}
	if(strlen($_POST['pwd'])<5){
		echo "Short pasword <br>";
		$isOk = false;
	}
	if(empty($_POST['gender'])){
		echo "Gender required";
		$isOk = false;
	}

	if($isOk){
		echo "ok";
	}
?></div>
<?php
printFooter();
	?>
