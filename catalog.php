<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Catalog</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js"></script>
</head>
<body onload="initial();">
<?php
include "before.php";
$query = sprintf ( "SELECT a.end_time as end_time, a.id as id, h.name as name,h.min_bet as min_bet,
		h.history as history,h.powers as powers,h.picture_main as picture_main,h.picture_descr as 
		picture_descr,c.name as firm, c.descr as firmDescr
		 FROM auction a inner join heroe h on a.id_heroe = h.id inner join company c on h.id_company = c.id;" );

/* $query = sprintf ( "SELECT * FROM auction"); */
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
?>
	<div class="container">
		<div class="content">
			<h1>HEROES CATALOG</h1>
			<br>
			<table class="hcatalog" id="catalog">
				<?php
				$selectedAdded = false;
				while ( $row = mysql_fetch_array ( $result ) ) {
					?>
				    <tr
					class="selectable <?php if(!$selectedAdded){echo "selectedRow";$selectedAdded=true;}?>"
					name="<?php echo $row['id']?>">
					<td class="tdImg"><a href="<?php echo "heroe.php?hero=".$row['name'];?>">
							<img class="limg" alt="" src="<?php echo $row['picture_main'];?>">
					</a></td>
					<td class="tdInfo" onclick="loadHero('<?php echo $row['name'];?>')">
							<h1 class="h1_catalog h1_link"><?php echo $row['name'];?></h1>
					</a> <br>
						<div class="firm">
							<div class="firm_header"><?php echo $row['firm'];?></div>
							<div class="firm_info firm_info_hidden"><?php echo $row['firmDescr'];?></div>
						</div></td>
					<td class="tdInfo" title="Current price">
						<h1 class="h1_catalog "><?php echo $row['min_bet'];?> $</h1> <input
						class="curr_bet" type="text" value="<?php echo $row['min_bet']?>">
						<input class="bet" type="checkbox">BET
						<div class="tdInfo" title="End date">
							<h8><?php echo $row['end_time']?></h8>
						</div>
					</td>

				</tr>
				<?php }?>				
			</table>

			<form class="actButtons">
				<input type="button" onclick="up();" value="UP"> <input
					type="button" onclick="down();" value="DOWN"> <input type="button"
					onclick="bet();" value="BET"> <input type="button"
					onclick="send();" value="SEND">
			</form>
		</div>
	</div>
<?php include 'after.php';?>
</body>
</html>
