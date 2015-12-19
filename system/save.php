<?php
	if (isset($_POST['step'])) {
		if ($_POST['step'] == "10") {
			$id = gen_uuid();
			$nomor = strtoupper(uniqid());

			$tujuan = $tujuan;
			$harga_per_kilo = $harga;
			$berat_barang = $berat;
			$asuransi = $biayaAsuransi;
			$packing_kayu = $biaya;
			$lama_hari = $lamaHari;

			$r = mysql_query("INSERT INTO m_pengiriman VALUES ('$id', now(), '$nomor', '$tujuan', $harga_per_kilo, $berat_barang, $asuransi, $packing_kayu, '$lama_hari')") or die(mysql_error());
			if ($r) {
				echo "<script>alert('Berhasil Menyimpan Data'); window.location.href = '?page=print?id=".$id."';</script>";
			} else {
				echo "<script>alert('Gagal Menyimpan Data');window.history.back();</script>";
			}
		}
	}
?>