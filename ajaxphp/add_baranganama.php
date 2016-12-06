<?php
	if(isset($_POST['nama_barang']))
	{
		include('../db/koneksi.php');
		$nama_barang=$_POST['nama_barang'];
		
		$cek_nama_barang=$mysqli->query("select count(*) as jumnam from db_barang where nama_barang='$nama_barang'");
		$ambil_nama=mysqli_fetch_assoc($cek_nama_barang);
			if($ambil_nama['jumnam'] > 0)
			{
				echo "Nama Barang Sudah Ada..!";
			}
							
							
		$cek_nama_barang=$mysqli->query("select count(*) as jumnam from db_add_barang_pending where nama_barang='$nama_barang'");
		$ambil_nama=mysqli_fetch_assoc($cek_nama_barang);
			if($ambil_nama['jumnam'] > 0)
			{
				echo "Nama Barang Sudah Ada..!";
			}
	}
?>