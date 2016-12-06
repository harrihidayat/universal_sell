	<?php
		
		include('../db/koneksi.php');
			$nama_customer=mysqli_real_escape_string($mysqli,$_POST['nama_customer']);
			$alamat=mysqli_real_escape_string($mysqli,$_POST['alamat']);
			$no_telp=mysqli_real_escape_string($mysqli,$_POST['no_telp']);
			$jenis_customer=mysqli_real_escape_string($mysqli,$_POST['jenis_customer']);
			$keuntungan=mysqli_real_escape_string($mysqli,$_POST['keuntungan']);
			
			
	
			
			if(!empty($nama_customer) && !empty($alamat) && !empty($no_telp) && !empty($jenis_customer))
			{
				if(is_numeric($no_telp))
				{
				
						$cek_nama_customer=$mysqli->query("select count(*) as jumkod from db_customer where nama_costomer='$nama_customer'");
						$ambil_kode=mysqli_fetch_assoc($cek_nama_customer);
						if($ambil_kode['jumkod'] > 0)
						{
							echo "Nama Customer Sudah Ada..!";
						}
						else
						{
							
								
						
											$add_customer=$mysqli->query("insert into db_customer set nama_costomer='$nama_customer', alamat_customer='$alamat', no_telp='$no_telp', jenis_customer='$jenis_customer', keuntungan='$keuntungan'");
											if($add_customer)
											{
												echo "Customer Ditambahkan";
											}
											else
											{
												echo "Gagal Tambah Customer, Silahkan Contact Developer";
											}
							
							
						}
					
					
				}
				else
				{
					echo "Nomor Telepon Harus Angka";
				}
			}
			else
			{
				echo "Input Tidak Boleh Ada Yang Kosong";
			}
			
		
	
	?>