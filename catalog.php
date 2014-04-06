<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Catalog</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js\"></script>
</head>
<body onload="initial();">
<?php include $_SERVER['DOCUMENT_ROOT']."\before.php";
printHeader();?>
	<div class="container">
		<div class="content">
			<h1>HEROES CATALOG</h1>
			<br>
			<table class="hcatalog" id="catalog">
				<tr class="selectable selectedRow">
					<td class="tdImg"><a href="ironman.php"> <img
							class="limg" alt=""
							src="http://rewalls.com/images/201208/reWalls.com_69500.jpg"></a>
					</td>
					<td class="tdInfo">
						<a href="ironman.php">
							<h1 class="h1_catalog h1_link">IRONMAN</h1>
						</a> <br> 
						<div class="firm">
							<div class="firm_header">Marvell</div>
							<div class="firm_info firm_info_hidden">
								Marvel Entertainment, LLC, a wholly-owned subsidiary of The Walt Disney Company
							</div>
						</div>
					</td>
					<td class="tdInfo" title="Current price">
						<h1 class="h1_catalog">200 $</h1> 
						<input class = "bet" type="checkbox">BET
						<div class="tdInfo" title="Time left">28h 30m </div>
					</td>
				</tr>

				<tr class="selectable">
					<td class="tdImg"><a href="superman.php"> <img
							class="limg" alt=""
							src="http://static.comicvine.com/uploads/original/12/120919/3223740-6740249946-Super.jpg"></a>
					</td>
					<td class="tdInfo" ><a href="superman.php"><h1
								class="h1_catalog h1_link">SUPERMAN</h1></a> <br>
								<div class="firm">
							<div class="firm_header">DC</div>
							<div class="firm_info firm_info_hidden">
								DC Comics is home to the "World's Greatest Super Heroes"
							</div>
						</div>
					</td>
					<td class="tdInfo" title="Current price">
						<h1 class="h1_catalog">250 $</h1> 
						<input class = "bet" type="checkbox" />BET
						<div class="tdInfo" title="Time left">36h 5m </div>
					</td>	
				</tr>
			</table>
			<form class="actButtons">
				<input type="button" onclick="up();" value="UP"> <input
					type="button" onclick="down();" value="DOWN"> <input
					type="button" onclick="bet();" value="BET"> <input
					type="button" onclick="send();" value="SEND">
			</form>
		</div>
	</div>
<?php printFooter();?>
</body>
</html>
