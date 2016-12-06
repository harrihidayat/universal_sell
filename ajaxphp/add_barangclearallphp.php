<?php
		include('../db/koneksi.php');

		$id_user=$_POST['id_user'];
		
		$delete_all=$mysqli->query("delete from db_add_barang_pending where id_user='$id_user'") or die('cek : '.mysqli_error());
		if($delete_all)
		{
			echo "Chart Berhasil Dibersihkan..!";
		}
		else
		{
			echo "Gagal Bersihkan Chart";
		}
	
?>