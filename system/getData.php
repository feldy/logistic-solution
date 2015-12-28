<?php
	include "../config/configuration.php";

	$a = array();

	$xxx = mysqli_query($conn, "SELECT wilayah as text, kode as value, provinsi as grup, harga, lama_hari FROM m_harga ORDER BY provinsi asc") or die(mysql_error());
	while($arr = mysqli_fetch_array($xxx, MYSQLI_ASSOC)) {
		$a[] = $arr;		
	}

	echo json_encode($a);
?>