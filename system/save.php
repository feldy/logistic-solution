<?php
	if (isset($_POST['step'])) {
		if ($_POST['step'] == "10") {
			$id = gen_uuid();
			$nomor = strtoupper(uniqid());

			$tujuan = $tujuan;
			$harga_per_kilo = ($harga != "") ? $harga : 0;
			$berat_barang = ($berat != "") ? $berat : 0;
			$asuransi = ($biayaAsuransi != "") ? $biayaAsuransi : 0;
			$packing_kayu = ($biaya != "") ? $biaya : 0;
			$lama_hari = ($lamaHari != "") ? $lamaHari : 0;

			$r = mysqli_query($conn, "INSERT INTO m_pengiriman VALUES ('$id', now(), '$nomor', '$tujuan', $harga_per_kilo, $berat_barang, $asuransi, $packing_kayu, '$lama_hari')") or die(mysqli_error($conn));
			if ($r) {
				echo "<script>alert('Berhasil Menyimpan Data'); window.location.href = '?page=print&id=".$id."';</script>";
			} else {
				echo "<script>alert('Gagal Menyimpan Data');window.history.back();</script>";
			}
		}
	} else if (isset($_POST['saveHarga'])) {
		// include "../config/configuration.php";
		// echo ">>>".gen_uuid();
		$id = gen_uuid();
		$kode = $_POST['kode'];
		$wilayah = $_POST['wilayah'];
		$provinsi = $_POST['provinsi'];
		$lama_hari = $_POST['lama_hari'];
		$harga = $_POST['harga'];
		if (isset($_POST['id_existing'])) {
			$id_existing = $_POST['id_existing'];
			$r = mysqli_query($conn, "UPDATE m_harga SET kode = '$kode', lama_hari = '$lama_hari', wilayah = '$wilayah', provinsi = '$provinsi', harga = $harga WHERE id = '$id_existing'") or die(mysqli_error($conn));
		} else {
			$r = mysqli_query($conn, "INSERT INTO m_harga VALUES ('$id', '$kode', '$wilayah', '$provinsi', '$lama_hari', $harga)") or die(mysqli_error($conn));
		}
		if ($r) {
			echo "<script>window.location.href = '?page=update_harga';</script>";
		} else {
			echo "<script>alert('Gagal Menyimpan Data');window.history.back();</script>";
		}
	}
?>