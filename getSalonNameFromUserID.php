<?php
include("../includes/mysql_connect.php");

$sql = "SELECT artego_salon.salon_name 
		FROM artego_salon 
		INNER JOIN artego_salon_user ON artego_salon.salon_id = artego_salon_user.salon_id 
		WHERE artego_salon_user.user_id =" .$_GET['userID'];
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
		$salon_name = $row['salon_name'];
		$message .= "$salon_name";
		$count ++;
	}
}
catch(Exception $e)
{
	$message = "Broken";
}
echo "$message";
?>