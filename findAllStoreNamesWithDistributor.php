<?php
	include("../includes/mysql_connect.php");
?>
<?php
	$result = mysql_query("SELECT * FROM artego_store where distributor_id=" .$_GET['distributorID']  );
	while($row = mysql_fetch_array($result))
	{
		$storeName = $row['store_name'];
		echo "$storeName";
		echo "\n";
	}
?>