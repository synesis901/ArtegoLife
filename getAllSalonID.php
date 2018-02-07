<?php
	include("../includes/mysql_connect.php");
?>
<?php
	$result = mysql_query("SELECT salon_id FROM artego_salon");
	while($row = mysql_fetch_array($result))
	{
		$salonID = $row['salon_id'];
		echo "$salonID";
		echo "\n";
	}
?>