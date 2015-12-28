<?php
	$id = $_GET['id']; 

		$a = mysqli_query($conn, "SELECT * FROM m_pengiriman where id = '$id'") or die(mysql_error());
		$ar = mysqli_fetch_array($a, MYSQLI_ASSOC);

		$charge = $ar['berat_barang'];
		$tujuan = $ar['tujuan'];
		$harga = $ar['harga_per_kilo'];
		$jmlBiaya = $harga * $charge;
		$biayaAsuransi = $ar['asuransi'];
		$biaya = $ar['packing_kayu'];
?>

<table cellpadding="3">
    <tr>
        <td colspan="2">
        	<fieldset>
        		<legend>Perician Biaya</legend>
        		<table width="100%">
        			<tr>
        				<td>Charge Berat Yang Dibebankan</td>
        				<td>: <?php  if ($charge != "") {echo number_format($charge);} else {echo 0;} ?> Kg</td>
        			</tr>
        			<tr>
        				<td>Tujuan Pengiriman</td>
        				<td>: <?php  echo $tujuan; ?></td>
        			</tr>
        			<tr>
        				<td>Harga Per-Kg</td>
        				<td>: Rp. <?php  if ($harga != "") {echo number_format($harga);} else {echo 0;} ?></td>
        			</tr>
        			<tr>
        				<td>Jumlah Biaya</td>
        				<td>: Rp. <?php  echo number_format($jmlBiaya);?></td>
        			</tr>
        			<tr>
        				<td>&nbsp;</td>
        			</tr>
        			<tr>
        				<td>Biaya Perlakuan Khusus :</td>
        				<td></td>
        			</tr>
        			<tr>
        				<td>&emsp;Asuransi</td>
        				<td>: Rp. <?php  if ($biayaAsuransi != "") {echo number_format($biayaAsuransi);} else {echo 0;} ?></td>
        			</tr>
        			<tr>
        				<td>&emsp;Packing Kayu</td>
        				<td>: Rp. <?php  if ($biaya != "") {echo number_format($biaya);} else {echo 0;} ?></td>
        			</tr>
        			<tr>
        				<td>Jumlah</td>
        				<td>: Rp. <?php  
        				if ($biaya == "") {$biaya = 0;}
        				if ($biayaAsuransi == "") {$biayaAsuransi = 0;}

        				echo number_format($biaya+$biayaAsuransi); ?>

        			</td>
        			</tr>
        			<tr style="font-weight: bold;">
        				<td><br />Jumlah Keseluruhan Biaya Pengiriman</td>
        				<td>: Rp. <?php  
        				if ($biaya == "") {$biaya = 0;}
        				if ($biayaAsuransi == "") {$biayaAsuransi = 0;}
        				if ($jmlBiaya == "") {$jmlBiaya = 0;}

        				echo number_format(($biaya+$biayaAsuransi)+$jmlBiaya); ?></td>
        			</tr>
        		</table>
        	</fieldset>
        </td>
    </tr> 
    <tr>
    	<td colspan="2">Untuk Request Order Pengambilan Barang Harap Menghubungi Call Center Kami.</td>
    </tr>
    <tr>
    	<td colspan="2">Nomor Call Center Operator Kami : 021-xxxxxxx</td>
    </tr>
        <tr>
    	<td colspan="2">
	    	<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="#" onclick="print()">Print</a></span>						
    	</td>
    </tr>
</table>
