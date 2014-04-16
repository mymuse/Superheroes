<?php
$heroeName = $_GET ['name'];
$query = sprintf ( "SELECT  h.name as name,  h.history as history, h.powers as powers, h.picture_descr as picture_descr,
		c.name as firm
		FROM heroe h
		inner join company c on h.id_company = c.id
		WHERE h.name='" . $heroeName . "';" );
$link = mysql_connect ( 'localhost:3306', 'root', 'root' );
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
?>
<div>
	<p class="delivery">
		<b> <?php echo $row['name']?> </b> <?php echo $row['history']?>
			</p>
	<img class="detImg" alt="" src="<?php echo $row['picture_descr'];?>">
	<h2>
		<b>Powers</b>
	</h2>
	<p class="delivery"><?php echo $row['powers']?></p>
</div>
