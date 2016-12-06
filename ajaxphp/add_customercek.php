<?php
	if(isset($_POST['nama_customer']))
	{
		include('../db/koneksi.php');
		$nama_customer=$_POST['nama_customer'];
		$cek_nama_customer=$mysqli->query("select count(*) as jumnama from db_customer where nama_costomer='$nama_customer'");
		$ambil_kode=mysqli_fetch_assoc($cek_nama_customer);
			if($ambil_kode['jumnama'] > 0)
			{
				echo "Nama Customer Sudah Ada..!";
			}
	}


?>