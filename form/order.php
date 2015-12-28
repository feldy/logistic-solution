<?php
	$step = 1;
	$paket = "";
	$layanan = "";
	$tujuan = "";
	$berat = "";
	$panjang = "";
	$lebar = "";
	$tinggi = "";
	$hasilVolum = "";
	$charge = "";
	$harga = "";
	$jmlBiaya = "";

	$asuransi = "";
	$hargaAsuransi = "";
	$biayaAsuransi = "";
	$beratPackingKayu = "";
	$panjangPacking = "";
	$lebarPacking = "";
	$tinggiPacking = "";
	$beratPacking = "";
	$biayac  = "";
	if (isset($_POST['step'])) {
		$step = $_POST['step']; 


		//value
		$lamaHari = $_POST['lamaHari'];
		$paket = $_POST['paket'];
		$layanan = $_POST['layanan'];
		$tujuan = $_POST['tujuan'];
		$berat = $_POST['berat'];
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		$tinggi = $_POST['tinggi'];
		$hasilVolum = $_POST['hasilVolum'];
		$charge = $_POST['charge'];
		$harga = $_POST['harga'];
		$jmlBiaya = $_POST['jmlBiaya'];

		$asuransi = $_POST['asuransi'];
		$hargaAsuransi = $_POST['hargaAsuransi'];
		$biayaAsuransi = $_POST['biayaAsuransi'];
		$beratPackingKayu = $_POST['beratPackingKayu'];
		$panjangPacking = $_POST['panjangPacking'];
		$lebarPacking = $_POST['lebarPacking'];
		$tinggiPacking = $_POST['tinggiPacking'];
		$beratPacking = $_POST['beratPacking'];
		$biaya = $_POST['biaya'];

		include "system/save.php";
	}
?>

<form method="post" action="">
<span style="<?php if ($step == 1) { echo 'display: inline-block';  } else { echo 'display: none'; }  ?>">
	<div class="easyui-panel" title="Step 1: Order Baru" style="width:600px;">
	    <div style="padding:10px 30px 20px 30px">
		    <!-- <form method="post" action=""> -->
		        <table cellpadding="3">
		            <tr>
		                <td>Jenis Barang:</td>
		                <td>
		                	<select class="easyui-combobox" name="paket" id="paket" style="width:200px;" data-options="onSelect: onChangePaket" >
		                    	<option value="paket" <?php if ($paket == "paket") { echo 'selected';} ?>>Paket</option>
		                    	<option value="dokumen" <?php if ($paket == "dokumen") { echo 'selected';} ?>>Dokumen</option>
		                    	<option value="cair" <?php if ($paket == "cair") { echo 'selected';} ?>>Cair</option>
		                    	<option value="kendaraan" <?php if ($paket == "kendaraan") { echo 'selected';} ?>>Kendaraan</option>
		                    </select>
		                
		                </td>
		            </tr>
		            <tr>
		                <td>Layanan:</td>
		                <td>
		                	<select class="easyui-combobox" id="layanan" name="layanan" style="width:200px;">
		                    	<option value="udara" <?php if ($layanan == "udara") { echo 'selected';} ?>>Udara</option>
		                    	<option value="darat" <?php if ($layanan == "darat") { echo 'selected';} ?>>Darat</option>
		                    </select>
		                </td>
		            </tr>
		            <tr>
		                <td>Tujuan:</td>
		                <td>
		                	<input class="easyui-combobox" name="tujuan" value="<?php echo $tujuan;?>" onchange="onChangeTujuan" id="tujuan" style="width:200px;" data-options="
				                url: 'system/getData.php',
				                method: 'get',
				                valueField:'text',
				                textField:'text',
				                groupField:'grup',
				                onSelect: onChangeTujuan
				            ">
		                </td>
		            </tr>
		            <tr>
		                <td>Berat Aktual:</td>
		                <td><input value="<?php echo $berat;?>" class="easyui-numberbox" style="width:95px;" type="text" name="berat" id="berat" data-options="precision:0, groupSeparator:',', buttonText:'Kg', onChange: onChangeBerat" ></input></td>
		            </tr> 
		            <tr>
		                <td>Rincian Volume:</td>
		                <td>
		                	<input value="<?php echo $panjang;?>" class="easyui-numberbox" style="width:95px;" type="text" id="panjang" name="panjang" data-options="prompt:'Panjang', precision:0, groupSeparator:',', buttonText:'Cm', onChange: onChangeVolum"></input>
		                	<input value="<?php echo $lebar;?>" class="easyui-numberbox" style="width:95px;" type="text" id="lebar" name="lebar" data-options="prompt:'Lebar', precision:0, groupSeparator:',', buttonText:'Cm', onChange: onChangeVolum"></input>
		                	<input value="<?php echo $tinggi;?>" class="easyui-numberbox" style="width:95px;" type="text" id="tinggi" name="tinggi" data-options="prompt:'Tinggi', precision:0, groupSeparator:',', buttonText:'Cm', onChange: onChangeVolum"></input>
		                	<input value="<?php echo $hasilVolum;?>" class="easyui-numberbox" style="width:95px;" type="text" name="hasilVolum" id="hasilVolum"  data-options="prompt:'Hasil', readonly: true, precision:0, groupSeparator:',', buttonText:'Kg', onChange: onChangeHasilVolum"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Charge Berat:</td>
		                <td>
		                	<input value="<?php echo $charge;?>" class="easyui-numberbox" style="width:95px;" type="text" name="charge" id="charge" data-options="readonly: true, precision:0, groupSeparator:',', buttonText:'Kg', onChange: onChangeCharge"></input>
		                	<input value="<?php echo $lamaHari;?>" style="width:95px;" type="hidden" name="lamaHari" id="lamaHari" ></input>
		            	</td>
		            </tr>
		            <tr>
		                <td>Harga Per-Kg:</td>
		                <td>
		                	<input value="<?php echo $harga;?>" class="easyui-numberbox" id="harga" style="width:200px;" type="text" name="harga" data-options="readonly: true, precision:0, groupSeparator:',', buttonText:'Rp', onChange: onChangeHarga"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Jumlah Biaya:</td>
		                <td>
		                	<input value="<?php echo $jmlBiaya;?>" class="easyui-numberbox" style="width:200px;" type="text" id="jmlBiaya" name="jmlBiaya" data-options="readonly: true, precision:0, groupSeparator:',', buttonText:'Rp', onChage: onChangeJmlBiaya"></input>
		                </td>
		            </tr>
		        </table>
			    <div style="text-align:center;padding:5px">
			    	<button class="easyui-linkbutton" type="button" >Clear</button>
			    	<button class="easyui-linkbutton" type="submit" name="step" value="2">Next</button>
			    </div>
	    </div>
	</div>
	<br />
</span>
<span style="<?php if ($step == 2) { echo 'display: inline-block';  } else { echo 'display: none'; }  ?>">
	<div class="easyui-panel" title="Step 2: Packing & Asuransi" style="width:600px">
	    <div style="padding:10px 30px 20px 30px">
		    <!-- <form method="post" action=""> -->
		        <table cellpadding="3">
		            <tr>
		                <td colspan="2">
		                	<fieldset>
		                		<legend>Biaya</legend>
		                		<table width="100%">
		                			<tr>
		                				<td>Charge Berat</td>
		                				<td>: <?php  if ($charge != "") {echo number_format($charge);}  ?> Kg</td>
		                			</tr>
		                			<tr>
		                				<td>Harga Per-Kg</td>
		                				<td>: Rp. <?php if ($harga != "") {echo number_format($harga);} ?></td>
		                			</tr>
		                			<tr>
		                				<td>Jumlah Biaya</td>
		                				<td>: Rp. <?php if ($jmlBiaya != "") {echo number_format($jmlBiaya);} ?></td>
		                			</tr>
		                		</table>
		                	</fieldset>
		                </td>
		            </tr> 
		            <tr>
		            	<td colspan="2">
		                	<fieldset>
		                		<legend>Asuransi</legend>
		                		<table width="100%">
		                			<tr>
		                				<td colspan="2"><input value="<?php echo $asuransi;?>" class="easyui-checkbox" name="asuransi" id="asuransi" onclick="onClickAsuransi()" type="checkbox"></input> Pakai Asuransi ?</td>
		                			</tr>
		                			<tr>
		                				<td>
						                	<input value="<?php echo $hargaAsuransi;?>" class="easyui-numberbox" style="width:200px;" type="text" id="hargaAsuransi" name="hargaAsuransi" data-options="prompt:'Harga Barang', precision:0, groupSeparator:',', buttonText:'Rp', readonly: true, onChange: onChangeHargaAsuransi"></input>
						                	<input value="<?php echo $biayaAsuransi;?>" class="easyui-numberbox" style="width:200px;" type="text" id="biayaAsuransi" name="biayaAsuransi" data-options="prompt:'Biaya Asuransi', precision:0, readonly: true, groupSeparator:',', buttonText:'Rp'"></input>
						            	</td>
		                			</tr>
		                		</table>
		                	</fieldset>
		                </td>                
		            </tr>
		            <tr>
		            	<td colspan="2">
		                	<fieldset>
		                		<legend>Packing Kayu</legend>
		                		<table width="100%">
		                			<tr>
		                				<td colspan="2"><input class="easyui-checkbox" name="packingKayu" id="packingKayu" type="checkbox" onclick="onClickPackingKayu()"></input> Packing Kayu ?</td>
		                			</tr>
		                			<tr>
						                <td>Berat Aktual:</td>
						                <td><input value="<?php echo $beratPackingKayu;?>" class="easyui-numberbox" style="width:95px;" type="text" name="beratPackingKayu" id="beratPackingKayu" data-options="precision:0, groupSeparator:',', buttonText:'Kg', readonly: true "></input></td>
						            </tr> 
						            <tr>
						                <td>Rincian Volume:</td>
						                <td>
						                	<input value="<?php echo $panjangPacking;?>" class="easyui-numberbox" style="width:95px;" type="text" name="panjangPacking" id="panjangPacking" data-options="prompt:'Panjang', precision:0, groupSeparator:',', buttonText:'Cm',readonly: true, onChange: onChangeVolumKayu"></input>
						                	<input value="<?php echo $lebarPacking;?>" class="easyui-numberbox" style="width:95px;" type="text" name="lebarPacking" id="lebarPacking" data-options="prompt:'Lebar', precision:0, groupSeparator:',', buttonText:'Cm', readonly: true, onChange: onChangeVolumKayu"></input>
						                	<input value="<?php echo $tinggiPacking;?>" class="easyui-numberbox" style="width:95px;" type="text" name="tinggiPacking" id="tinggiPacking" data-options="prompt:'Tinggi', precision:0, groupSeparator:',', buttonText:'Cm', readonly: true, onChange: onChangeVolumKayu"></input>
						                	<input value="<?php echo $beratPacking;?>" class="easyui-numberbox" style="width:95px;" type="text" name="beratPacking" id="beratPacking" data-options="prompt:'Berat Volume', readonly: true, precision:0, groupSeparator:',', buttonText:'Kg'"></input>
						                </td>
						            </tr>
						            <tr>
						                <td>Biaya:</td>
						                <td>
						                	<input value="<?php echo $biaya;?>" class="easyui-numberbox" style="width:200px;" type="text" name="biaya" id="biaya" data-options="precision:0, groupSeparator:',',readonly: true, buttonText:'Rp'"></input>
						                </td>
						            </tr>
		                		</table>
		                	</fieldset>
		                </td>    
		            </tr>
		        </table>
			    <div style="text-align:center;padding:5px">
			        <button class="easyui-linkbutton" type="button" >Clear</button>
					<button class="easyui-linkbutton" type="submit" name="step" value="3">Next</button>
			    </div>
		    <!-- </form> -->
	    </div>
	</div>
	<br />
</span>
<span style="<?php if ($step == 3) { echo 'display: inline-block';  } else { echo 'display: none'; }  ?>">
	<div class="easyui-panel" title="Step 3: Finishing" style="width:600px">
	    <div style="padding:10px 30px 20px 30px">
	    <!-- <form id="ff" method="post"> -->
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
	                				<td>: Rp. <?php  if ($jmlBiaya != "") {echo number_format($jmlBiaya);} else {echo 0;} ?></td>
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
	        </table>
	    <!-- </form> -->
	    <div style="text-align:center;padding:5px">
	         <div style="text-align:center;padding:5px">
			        <button class="easyui-linkbutton" type="button">Clear</button>
					<button class="easyui-linkbutton" type="submit" name="step" value="10" >Simpan</button>
					<button class="easyui-linkbutton" type="button" onclick='window.location.href = "index.php"' >Kembali Ke Menu Utama</button>
			    </div>
	    </div>
	    </div>
	</div>
</span>
</form>