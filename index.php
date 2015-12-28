<?php 
	include("config/configuration.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LOGISTIC Solution</title>
		<link rel="stylesheet" type="text/css" href="lib/jquery-easyui-1.4.4/themes/gray/easyui.css">
	    <link rel="stylesheet" type="text/css" href="lib/jquery-easyui-1.4.4/themes/icon.css">
		<script type="text/javascript" src="lib/jquery-easyui-1.4.4/jquery.min.js"></script>
		<script type="text/javascript" src="lib/jquery-easyui-1.4.4/jquery.easyui.min.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</head>
	<nav class="navigation-bar">
	    <nav class="navigation-bar-content" style="background-color: #2D3E50;margin-left: -10px;margin-top: -10px;padding: 15px;margin-right: -8px;">
	    	<span style="font-size: 200%;color: whitesmoke;font-family: fantasy;">
	   			<i class="icon-large-smartart">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i><a style="cursor: pointer;text-decoration: none; color: whitesmoke;" href="index.php">LOGISTIC Solution</a>
	    	</span>
	    </nav>
	</nav>
	<body style="background-color: #C7C7CA;">
		<table width="80%" border="0" align="center">
			<tr><td>&nbsp;</td></tr>
			<tr><td>
				<?php 
					if (isset($_GET['page'])) {
						if ($_GET['page'] == "report") {
							include 'form/report.php';
						} else if ($_GET['page'] == "print") {
							include 'form/print.php';
						} else if ($_GET['page'] == "order") {
							include 'form/order.php';
						} else if ($_GET['page'] == "login") {
							include 'form/login.php';
						} else if ($_GET['page'] == "update_harga") {
							include 'form/update_harga.php';
						} else {
							echo '<span style="font-size: 150%;">404 Not Found<hr></span>';
						}
					} else {
				?>
				<span style="font-size: 150%;">
					Selamat Datang
					<hr>
				</span>
				Ini Adalah Aplikasi Untuk Menghitung Biaya Pengiriman Barang
				<p>1. Jenis Barang Kendaraan & Cairan Hanya Bisa Dikirimkan Menggunakan Layanan Darat</p>
				<p>2. Asuransi Pengiriman Dapat Diberlakukan untuk membantu kiriman yang nilainya cukup tinggi ,atau tinggi resiko kerusakannya . Premi Asuransinya dibebankan kepada pengirim sebesar 0,35% dari nilai barang.</p>
				<p>3. Barang-Barang Yang Masuk Dalam Kategori Wajib Packing Kayu Adalah jenis barang (pecah belah, cairan, makanan, dan sebagainya).  Perlu di-ingat dalam proses pengiriman barang akan banyak dilakukan proses handling, mulai dari barang di ambil di tempat konsumen, di gudang ekspedisi, pada saat dimuat di kendaraan (truk) atau pada saat proses pemuatan di pesawat maupun setelah barang tiba di tujuan. Semakin banyak handling yang dilakukan maka semakin besar juga resiko kerusakan barang. </p>
				<p>4. Charge Berat Yang Dibebankan, Diambil Dari Hasil Penghitungan Yang Paling Tinggi. Apabila Penghitungan Secara Volumetrik Menunjukan Hasil Yang Lebih Tinggi, Maka Hasil Penghitungan Volumetrik Yang Akan Digunakan Sebagai Charge Berat</p>
				<p>5. Untuk Request Order Pengambilan Barang Harap Menghubungi Call Center Kami.</p>
				<p>
	    			<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="?page=order">Order Sekarang</a></span> | 
	    			<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="?page=report">Report</a></span>	|
	    			<?php
	    				session_start();
	    				if (!empty($_SESSION['username']) && !empty($_SESSION['password'])) {
	    					echo '<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="?page=update_harga">Update Harga</a></span> | ';
	    					echo '<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="system/logout.php">Logout</a></span>';
	    				} else {
	    					echo '<span style="font-size: 150%;color: whitesmoke;font-family: fantasy;"><a href="?page=login">Login</a></span>';
	    				}	
	    			?>					
	    									
				</p>
				<?php } ?>
			</td></tr>
		</table>
	</body>
</html>