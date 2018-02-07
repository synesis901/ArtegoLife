<?php
	include("../includes/mysql_connect.php");
?>
<?php

	$getLat = $_GET['getLattitude'];
	$getLong = $_GET['getLongitude'];
	$result = 
	mysql_query(
	"SELECT
	salon_id,
	salon_name,
	ACOS( SIN( RADIANS( `latitude` ) ) * SIN( RADIANS( " .$getLat. " ) ) + COS( RADIANS( `latitude` ) )
	* COS( RADIANS( " .$getLat. " )) * COS( RADIANS( `longitude` ) - RADIANS( " .$getLong. " )) ) * 6380 AS `distance`
	FROM `artego_salon`
	WHERE
	ACOS( SIN( RADIANS( `latitude` ) ) * SIN( RADIANS( " .$getLat. " ) ) + COS( RADIANS( `latitude` ) )
	* COS( RADIANS( " .$getLat. " )) * COS( RADIANS( `longitude` ) - RADIANS( " .$getLong. " )) ) * 6380 < 10
	ORDER BY `distance`"
	);
	while($row = mysql_fetch_array($result))
	{
		$salonName = $row['salon_name'];
		echo "$salonName";
		echo "\n";
	}
?>