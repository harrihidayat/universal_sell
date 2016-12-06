	<?php
		
		include('../db/koneksi.php');
			$kode_barang=mysqli_real_escape_string($mysqli,$_POST['kode_barang']);
			$nama_barang=mysqli_real_escape_string($mysqli,$_POST['nama_barang']);
			$jenis_barang=mysqli_real_escape_string($mysqli,$_POST['jenis_barang']);
			$qty=mysqli_real_escape_string($mysqli,$_POST['qty']);
			$satuan=mysqli_real_escape_string($mysqli,$_POST['satuan']);
			$harga=mysqli_real_escape_string($mysqli,$_POST['harga']);
			$titik=str_replace('.','',$harga);
			$koma=str_replace(',','',$titik);
			$harga_hasil1=str_replace('rp','',$koma);
			$harga_hasil=str_replace('Rp','',$harga_hasil1);
			
			$harga_total=$harga_hasil * $qty;
			
			
			if(!empty($kode_barang) && !empty($nama_barang) && !empty($jenis_barang) && !empty($qty)  && !empty($satuan))
			{
				if(is_numeric($qty))
				{
					if(is_numeric($harga))
					{
						
						$cek_kode_barang=$mysqli->query("select count(*) as jumkod from db_barang where kode_barang='$kode_barang'");
						$ambil_kode=mysqli_fetch_assoc($cek_kode_barang);
						if($ambil_kode['jumkod'] > 0)
						{
							echo "Kode Barang Sudah Ada..!";
						}
						else
						{
							$cek_nama_barang=$mysqli->query("select count(*) as jumnam from db_barang where nama_barang='$nama_barang'");
							$ambil_nama=mysqli_fetch_assoc($cek_nama_barang);
							if($ambil_nama['jumnam'] > 0)
							{
								echo "Nama Barang Sudah Ada..!";
							}
							else
							{
								$cek_nama_barang=$mysqli->query("select count(*) as jumnam from db_add_barang_pending where nama_barang='$nama_barang'");
								$ambil_nama=mysqli_fetch_assoc($cek_nama_barang);
								if($ambil_nama['jumnam'] > 0)
								{
									echo "Nama Barang Sudah Ada..!";
								}
								else
								{
									$cek_kode_barang=$mysqli->query("select count(*) as jumkod from db_add_barang_pending where kode_barang='$kode_barang'");
									$ambil_kode=mysqli_fetch_assoc($cek_kode_barang);
									if($ambil_kode['jumkod'] > 0)
									{
										echo "Kode Barang Sudah Ada..!";
									}
									else
									{
						
											$add_barang_ke_chart=$mysqli->query("insert into db_add_barang_pending set nama_barang='$nama_barang', kode_barang='$kode_barang', jenis_barang='$jenis_barang', qty_barang='$qty', harga='$harga_hasil', harga_total='$harga_total', id_user='$_SESSION[id_user]', satuan='$satuan', tanggal=NOW()");
											if($add_barang_ke_chart)
											{
												echo "Barang Ditambahkan";
											}
											else
											{
												echo "Kode Barang Sudah Ada..!";
											}
									}
								}
							}
						}
					}
					else
					{
						echo "Harga Harus format Angka";
					}
					
				}
				else
				{
					echo "Quantity Harus Angka";
				}
			}
			else
			{
				echo "Input Tidak Boleh Ada Yang Kosong";
			}
			
		
	
	?>