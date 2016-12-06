<?php
	if(isset($_POST['kode_barang']))
	{
		$kode_barang=$_POST['kode_barang'];
		$qty=$_POST['qty'];
		$harga=$_POST['harga'];
		if(!empty($qty))
		{
			if(!empty($kode_barang))
			{
				include('../db/koneksi.php');
				$cek_kode_barang=$mysqli->query("select count(*) as cek from db_barang where kode_barang='$kode_barang'");
				$ambil_cek=mysqli_fetch_assoc($cek_kode_barang);
				if($ambil_cek['cek'] > 0 )
				{
					
					$info_barang=$mysqli->query("select * from db_barang where kode_barang='$kode_barang'");
					$ambil_info=mysqli_fetch_assoc($info_barang);
					$nama_barang=$ambil_info['nama_barang'];
					
					
					$cek_chart=$mysqli->query("select count(*) as chart_c from db_add_stock_pending where kode_barang='$kode_barang' and id_user='$_SESSION[id_user]'");
					$ambil_cek_chart=mysqli_fetch_assoc($cek_chart);
					if($ambil_cek_chart['chart_c'] > 0)
					{
						echo "Barang Sudah Di Add Kechart..!";
					}
					else
					{
						
						$tambah_chart=$mysqli->query("insert into db_add_stock_pending set kode_barang='$kode_barang',
																							nama_barang='$nama_barang',
																							qty='$qty',
																							harga='$harga',
																							tanggal=NOW(),
																							id_user='$_SESSION[id_user]'");
						if($tambah_chart)
						{
							echo "Barang Berhasil Ditambah Ke Chart.!";
						}
						else
						{
							echo "Barang gagal ditambah, silahkan Kontak Developer..!";
						}
						
						
					}
					
					
					
					
				}
				else
				{
					echo "Kode Barang Tidak Ada";
				}
				
				
				
			}
			else
			{
				echo "Kode Barang Kosong.!";
			}
		}
		else
		{
			echo "Quantity Belum Diisi,..!";
		}
		
		
	}

?>