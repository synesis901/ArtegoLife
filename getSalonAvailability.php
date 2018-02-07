<?php
include("../includes/mysql_connect.php");

$sql = "SELECT availability_id FROM artego_salon_availability WHERE salon_id=" .$_GET['salonID'];
$message = "";
$count = 0;

try
{
	$result = mysql_query($sql) or die (mysql_error());
	while($row = mysql_fetch_array($result))
	{
		if($count != 0)
		{
			$message .= "\n";
		}
		$salon_avail = $row['availability_id'];	
		$message .= "$salon_avail";
		$count ++;
	}
}
catch(Exception $e)
{
	$message = "Broken";
}
echo $message;
?>