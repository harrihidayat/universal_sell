<?php
	$kode_barang=$_POST['kode_barang'];
	$id_customer=$_POST['customer'];
	include('../db/koneksi.php');
	$ambil_harga_satuan_barang=$mysqli->query("select * from db_barang where kode_barang='$kode_barang'");
	$barang=mysqli_fetch_assoc($ambil_harga_satuan_barang);
	
	$ambil_keuntungan_customer=$mysqli->query("select * from db_customer where id_customer='$id_customer'");
	$customer=mysqli_fetch_assoc($ambil_keuntungan_customer);
	
	$sepersen= $barang['harga'] / 100;
	$persen= $sepersen * $customer['keuntungan'];
	
	
	
	$harga_hasil= $barang['harga'] + $persen;


?>
	 <label for="exampleInputEmail1">Harga Jual Satuan</label>
                  <input value="<?php echo $harga_hasil; ?>" maxlength="11" class="form-control" type="text" name="harga" placeholder="IDR" id="harga" onKeyPress="return isNumberKey(event)" value="" required>
