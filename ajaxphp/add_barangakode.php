<?php
	if(isset($_POST['kode_barang']))
	{
		include('../db/koneksi.php');
		$kode_barang=$_POST['kode_barang'];
		$cek_kode_barang=$mysqli->query("select count(*) as jumkod from db_barang where kode_barang='$kode_barang'");
		$ambil_kode=mysqli_fetch_assoc($cek_kode_barang);
			if($ambil_kode['jumkod'] > 0)
			{
				echo "Kode Barang Sudah Ada..!";
			}
			
			
			
		$cek_kode_barang=$mysqli->query("select count(*) as jumkod from db_add_barang_pending where kode_barang='$kode_barang'");
		$ambil_kode=mysqli_fetch_assoc($cek_kode_barang);
			if($ambil_kode['jumkod'] > 0)
			{
				echo "Kode Barang Sudah Ada..!";
			}
	}


?>