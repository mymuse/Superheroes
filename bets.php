<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bets</title>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="js/all.js\"></script>
</head>
<body>
	<?php
	session_start ();
	// TO DO: show only for registered users!!!
	include "before.php";
	if ($_SERVER ['REQUEST_METHOD'] != "GET") {
		header ( "Location: catalog.php" );
	}
	$id_curr_user = $_SESSION ['user_id'];
	if (! $id_curr_user)
		header ( "Location: register.php" );
	
	$query_buid = "SELECT b.id as id, h.name as name, c.name as firm, b.bet as bet, b.bet_time as time
		 	FROM bet b 
			inner join auction a on b.id_auction = a.id
			inner join  heroe h on a.id_heroe = h.id 
			inner join company c on h.id_company = c.id
			WHERE  b.id_account = ".$id_curr_user."
			ORDER BY b.bet_time DESC ";
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
	
	?>
<div class="container">
		<div class="content">
			<h1>BETS</h1>
			<br>
			<table class="hcatalog" id="catalog">
					<?php
					$index = 0;
					while ( $row = mysql_fetch_array ( $result ) ) {
						$index = $index+1;
						?>
					<tr>
					<td>
						<h1><?php  echo $index; echo "."; ?> </h1>
					</td>
					<td><a href="<?php echo "heroe.php?hero=".$row['name'];?>">
							<h1 class="h1_catalog h1_link">
						<?php echo ($row ['name']); ?></h1>
					</a></td>
					<td>
						<h3>(<?php echo $row['firm'];?>) </h3>
					</td>
					<td>
						<h1><?php  echo $row['bet'];?>$ </h1>
					</td>
					<td>
						<h2><?php  echo $row['time'];?></h2>
					</td>

				</tr>
					<?php }?>				
				</table>
		</div>
	</div>
<?php include "after.php";?>
</body>
</html>