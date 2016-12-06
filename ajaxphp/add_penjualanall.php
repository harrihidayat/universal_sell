<?php

	if(isset($_POST['id_user']))
	{
		include('../db/koneksi.php');
		$cari_id_bon=$mysqli->query("select max(id_bon) as id_bon_max from db_transaksi");
		$id_bon_max=mysqli_fetch_assoc($cari_id_bon);
		$id_bon= $id_bon_max['id_bon_max'] + 1;
		
		$id_user= $_POST['id_user'];
		
		$ambil_chart=$mysqli->query("select * from db_add_penjualan_pending where id_user='$id_user'");
		while($row=mysqli_fetch_assoc($ambil_chart))
		{
				$stock=$mysqli->query("select * from db_barang where kode_barang='$row[kode_barang]'");
				$barang_db=mysqli_fetch_assoc($stock);
				
				if($barang_db['qty_barang'] < $row['qty'])
				{
					echo "Stock".$row['nama_barang']."Tidak Mencukupi Untuk Melakukan Transkasi";
				}
				else
				{
				
				$stock_baru=$barang_db['qty_barang'] - $row['qty'];
				
				$update_stock=$mysqli->query("update db_barang set qty_barang='$stock_baru' where kode_barang='$row[kode_barang]'");
				
				
					if($update_stock)
					{
						$tulis_transaksi=$mysqli->query("insert into db_transaksi set id_bon='$id_bon',
																					  kode_barang='$row[kode_barang]',
																					  nama_barang='$row[nama_barang]',
																					  qty='$row[qty]',
																					  harga='$row[harga]',
																					  jenis_transaksi='1',
																					  tanggal_transaksi=NOW(),
																					  id_user='$id_user'");
						if($tulis_transaksi)
						{
							$delete_all=$mysqli->query("delete from db_add_penjualan_pending where kode_barang='$row[kode_barang]' AND id_user='$id_user'") or die('cek : '.mysqli_error());
							echo "Chart Berhasil Ditambahkan..!";
						}
						else
						{
							echo "Gagal catat Transaksi, Silahkan Hubungi Developer..!";
						}
						
						
					}
					else
					{
						echo "Chart gagal Ditambahkan..!";
					}
				}
		}
		
	}

?>