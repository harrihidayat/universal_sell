<?php
	if(isset($_GET['id']))
	{
		include('../db/koneksi.php');
		$id=mysqli_real_escape_string($mysqli,$_GET['id']);
		$del_chart_db=$mysqli->query("delete from db_add_barang_pending where kode_barang='$id' AND id_user='$_SESSION[id_user]'");
		if($del_chart_db)
		{
			echo "<script>alert('Berhasil Hapus Barang..!');document.location='../index.php?page=add_barang'</script>";
		}
		else
		{
			echo "<script>alert('Gagal Hapus Barang, Silahkan Kontak Developer..!');document.location='../index.php?page=add_barang'</script>";
		}
	}

?>