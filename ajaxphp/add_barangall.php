<?php

	if(isset($_POST['id_user']))
	{
		$id_user= $_POST['id_user'];
		include('../db/koneksi.php');
		$ambil_chart=$mysqli->query("select * from db_add_barang_pending where id_user='$id_user'");
		while($row=mysqli_fetch_assoc($ambil_chart))
		{
			$masukkan_ke_barang=$mysqli->query("insert into db_barang set kode_barang='$row[kode_barang]', 																																																					                                                                          nama_barang='$row[nama_barang]',				                                             							  jenis_barang='$row[jenis_barang]',
																		  qty_barang='$row[qty_barang]',
																		  harga='$row[harga]',
																		  satuan='$row[satuan]',
																		  tanggal=NOW(),
																		  id_user='$row[id_user]'");
			if($masukkan_ke_barang)
			{
				$delete_all=$mysqli->query("delete from db_add_barang_pending where id_user='$id_user'") or die('cek : '.mysqli_error());
				echo "Chart Berhasil Ditambahkan..!";
			}
			else
			{
				echo "Chart gagal Ditambahkan..!";
			}
		}
		
	}

?>