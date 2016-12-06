<?php
	if(isset($_GET['id']))
	{
		include('../db/koneksi.php');
		$id=mysqli_real_escape_string($mysqli,$_GET['id']);
		$del_user=$mysqli->query("delete from db_customer where id_customer='$id'");
		if($del_user)
		{
			echo "<script>alert('Berhasil Hapus Customer..!');document.location='../index.php?page=user'</script>";
		}
		else
		{
			echo "<script>alert('Gagal Hapus Customer, Silahkan Kontak Developer..!');document.location='../index.php?page=user'</script>";
		}
	}

?>