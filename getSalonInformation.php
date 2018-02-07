<?php
include("../includes/mysql_connect.php");

$sql = "SELECT salon_id, salon_name, phone_number, address, city, province, postal_code, country, longitude, latitude FROM artego_salon WHERE salon_id=" .$_GET['salonID'];
$message = "";
		
try
{
	$result = mysql_query($sql) or die (mysql_error());
	while($row = mysql_fetch_array($result))
	{
		$salon_id = $row['salon_id'];
		$salon_name = $row['salon_name'];
		$phone_number = $row['phone_number'];
		$address = $row['address'];
		$city = $row['city'];
		$province = $row['province'];
		$postal_code = $row['postal_code'];
		$country = $row['country'];
		$longitude = $row['longitude'];
		$latitude = $row['latitude'];
		$message .= "$salon_id\n$salon_name\n$phone_number\n$address\n$city\n$province\n$postal_code\n$country\n$longitude\n$latitude";
	}
}
catch(Exception $e)
{
	$message = "Broken";
}
echo "$message";
?>