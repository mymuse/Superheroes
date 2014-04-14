<?php
session_start ();
$id_curr_user = $_SESSION ['user_id'];
if (! $id_curr_user)
	header ( "Location: register.php" );
$n = 2;

for($i = 0; $i < $n; $i ++) {
	$index = 'm' . $i;
	$index2 = 'b' . $i;
	if ($_GET [$index])
		$auction [] = $_GET [$index];
	if ($_GET [$index2])
		$bets [] = $_GET [$index2];
}

for($i = 0; $i < count ( $auction ); $i ++) {
	date_default_timezone_set ( "Europe/Kiev" );
	$date = date ( 'Y/m/d H:i:s' );
	$query_buid = "INSERT INTO bet(id_account,id_auction,bet,bet_time) VALUES(" . $id_curr_user . "," . $auction [$i] . "," . $bets [$i] . ",'" . $date . "')";
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
}

header ( "Location: bets.php" );
?>
