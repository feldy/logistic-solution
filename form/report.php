<span style="font-size: 150%;">
	Report
	<hr>
</span>
<?php 
	$xxx = mysql_query("SELECT count(*), sum(berat_barang), sum(asuransi), sum(packing_kayu), sum((berat_barang*harga_per_kilo)+asuransi+packing_kayu) FROM m_pengiriman where MONTH(tanggal) = MONTH(now())") or die(mysql_error());
	$yyy = mysql_fetch_array($xxx);

	$xxx1 = mysql_query("SELECT tujuan, count(tujuan) as jml FROM m_pengiriman where MONTH(tanggal) = MONTH(now()) group by tujuan order by jml desc LIMIT 1") or die(mysql_error());
	$yyy2 = mysql_fetch_array($xxx1);
	
?>
<table width="100%" border="0">
	<tr style="font-size: 130%;">
		<td>Laporan Pengiriman Bulan ini<br /><br /></td>
	</tr>
	<tr>
		<td>Pengiriman</td>
		<td>: <?php echo $yyy[0]; ?> Pengiriman</td>
	</tr><tr>
		<td>Daerah Pengiriman Terbanyak</td>
		<td>: <?php echo $yyy2[0]; ?>  Dengan <?php echo $yyy2[1]; ?> Pengiriman</td>
	</tr><tr>
		<td>Jumlah Berat Pengiriman</td>
		<td>: <?php echo $yyy[1]; ?> Kg</td>
	</tr><tr>
		<td>Jumlah Pemasukan Asuransi</td>
		<td>: Rp. <?php echo number_format($yyy[2]); ?></td>
	</tr><tr>
		<td>Jumlah Pemasukan Packing</td>
		<td>: Rp. <?php echo number_format($yyy[3]); ?></td>
	</tr><tr>
		<td>Jumlah Pemasukan</td>
		<td>: Rp. <?php echo number_format($yyy[4]); ?></td>
	</tr><tr>
		<td>
	    	<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="#" onclick="print()">Print</a></span>						
		</td>
	</tr>
</table>