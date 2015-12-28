	<?php
		if (isset($_POST['saveHarga'])) {
			include "system/save.php";
		}


		$kode = "";
		$wilayah = "";
		$provinsi = "";
		$lama_hari = "";
		$harga = "";

		if (isset($_GET['id_existing'])) {
			$ide = $_GET['id_existing'];
			$xxx = mysqli_query($conn, "SELECT * FROM m_harga where id = '$ide'") or die(mysql_error());
			$yyy = mysqli_fetch_array($xxx, MYSQLI_NUM);

			$id = $yyy[0];
			$kode = $yyy[1];
			$wilayah = $yyy[2];
			$provinsi = $yyy[3];
			$lama_hari = $yyy[4];
			$harga = $yyy[5];
		}
	?>
			<form action="" method="post">
	<div class="easyui-panel" title="Harga" style="width:800px;">
	    <div style="padding:10px 30px 20px 30px">
		        <table cellpadding="3">
		            <tr>
		                <td>Kode Wilayah</td>
		                <td>:
		                	<input class="easyui-textbox" type="text" value="<?php echo $kode; ?>" name="kode"></input>
		                	<?php 
		                		if (isset($_GET['id_existing'])) {
		                	?>
		                	<input  type="hidden" value="<?php echo $id; ?>" name="id_existing"></input>
		                	<?php } ?>
		                </td>
		            </tr>
		            <tr>
		                <td>Wilayah</td>
		                <td>:
		                	<input class="easyui-textbox" type="text" value="<?php echo $wilayah; ?>" name="wilayah"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Provinsi</td>
		                <td>:
		                	<input class="easyui-textbox" type="text" value="<?php echo $provinsi; ?>" name="provinsi"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Lama Pengiriman</td>
		                <td>:
		                	<input class="easyui-textbox" type="text" value="<?php echo $lama_hari; ?>" name="lama_hari" data-options="buttonText:'Hari'"></input>
		                </td>
		            </tr>
		            <tr>
		                <td>Harga</td>
		                <td>:
		                	<input class="easyui-numberbox" type="text" value="<?php echo $harga; ?>" name="harga" ></input>
		                </td>
		            </tr>
		            <tr>
		                <td></td>
		                <td>
				    		<button class="easyui-linkbutton" type="submit" name="saveHarga" >Simpan</button>
		                	<button class="easyui-linkbutton" type="reset" >Clear</button>
		                </td>
		            </tr>
		        </table>
	        <table cellpadding="3" border="1" width="100%">
	            <tr>
	                <td>No</td>
	                <td>Kode Wilayah</td>
	                <td>Wilayah</td>
	                <td>Provinsi</td>
	                <td>Lama Hari</td>
	                <td>Harga</td>
	                <td>Action</td>
	            </tr>
	            <?php 
	            	$xxx = mysqli_query($conn, "SELECT * FROM m_harga ORDER BY kode asc") or die(mysql_error());
	            	$i=0;
					while($yyy = mysqli_fetch_array($xxx, MYSQLI_NUM)) {
						$i++;
	            ?>
	            <tr>
	            	<td><?php echo $i;?></td>
	                <td><?php echo $yyy[1];?></td>
	                <td><?php echo $yyy[2];?></td>
	                <td><?php echo $yyy[3];?></td>
	                <td><?php echo $yyy[4];?></td>
	                <td><?php echo number_format($yyy[5]);?></td>
	                <td><a href="?page=update_harga&id_existing=<?php echo $yyy[0];?>">Edit</a></td>
	            </tr>
	            <?php } ?>
	        </table>
	    </div>
	</div>
		    </form>
