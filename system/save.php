<?php
	include("../config/configuration.php");

	$id = gen_uuid();
	$nomor = strtoupper(uniqid());

	$tujuan = "";
	$harga_per_kilo = "";
	$berat_barang = "";
	$asuransi = "";
	$packing_kayu = "";
	$lama_hari = "";

	mysql_query("INSERT INTO m_pengiriman VALUES ('$id', 'now()', '$nomor', '$tujuan', $harga_per_kilo, $berat_barang, $asuransi, $packing_kayu, '$lama_hari')") or die(mysql_error());
	
?>