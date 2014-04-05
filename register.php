<?php include $_SERVER['DOCUMENT_ROOT']."\Superheroes\before.php";
printHeader("Validated","");?>
	<div class="content">

		<form class="register_form" onsubmit="return validRegister()" action="\Superheroes\registered.php" method="POST">
			<p>
			</p>
			<p>
				Name: <input name="name" type="text">
			</p>
			<p>
				Email: <input name="email" type="text">
			</p>
			<p>
				Password: <input name="pwd" type="password">
			</p>
			<p>
				<input name="gender" type="radio" value="male" checked>Male<br>
				<input name="gender" type="radio" value="female">Female
			</p>
			<input type="submit" value="Register">
		</form>

	</div>
<?php printFooter();
	?>
