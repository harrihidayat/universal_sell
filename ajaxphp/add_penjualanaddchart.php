<?php
	$qty=$_POST['qty'];
	$harga=$_POST['harga'];
	$kode_barang=$_POST['kode_barang'];
	include('../db/koneksi.php');
	
	
	
	
	
	if(is_numeric($harga))
	{
			if(is_numeric($qty))
			{
			
					if(!empty($qty) && !empty($harga) && !empty($kode_barang))
					{		
							$cek_kode=$mysqli->query("select count(kode_barang) as cek from db_barang where kode_barang='$kode_barang'");
							$cek=mysqli_fetch_assoc($cek_kode);
							if($cek['cek'] > 0 )
							{		
								$ambil_data=$mysqli->query("select * from db_barang where kode_barang='$kode_barang'");
								$data_barang=mysqli_fetch_assoc($ambil_data);
								if($qty > $data_barang['qty_barang'])
								{
									echo "Jumlah Barang Tidak Mencukupi..!";
								}
								else
								{
									
									$cek_pending=$mysqli->query("select count(*) as cek_p from db_add_penjualan_pending where kode_barang='$kode_barang'");
									$cek_pending_ambl=mysqli_fetch_assoc($cek_pending);
									if($cek_pending_ambl['cek_p'] > 0 )
									{
										echo "Barang Sudah Di Add..!";
									}
									else
									{
										$add_chart=$mysqli->query("insert into db_add_penjualan_pending set 																			                                                                   kode_barang='$data_barang[kode_barang]',
																	nama_barang='$data_barang[nama_barang]',
																	qty='$qty',
																	harga='$harga',
																	tanggal=NOW(),
																	id_user='$_SESSION[id_user]'");
										if($add_chart)
										{
											echo "Barang Berhasil Ditambah KeChart..!";
										}
										else
										{
											echo "Gagal Tambah chart, Contack Developer Please..!";
										}
									}
								}
							}
							else
							{
								echo "Kode Barang Tidak Ditemukan.!";
							}
					}
					else
					{
						echo "Input Tidak Boleh Kodong..!";
					}
			}
			else
			{
				echo "Quantitiy harus angka..!";
			}
	}
	else
	{
		echo "Harga harus angka..!";
	}

?>