<?php
	if(isset($_POST['kode_barang']))
	{
		include('../db/koneksi.php');
		$kode_barang=$_POST['kode_barang'];
		$cek_kodebarang=$mysqli->query("select count(*) as cek from db_barang where kode_barang='$kode_barang'");
		$ambil_cek= mysqli_fetch_assoc($cek_kodebarang);
		if($ambil_cek['cek'] > 0 )
		{ ?>
			
            
            <div class="row">
                <div class="col-xs-12">
                  <div class="box">
                    <div class="box-header">
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                      <table class="table table-hover">
                        <tr>
                            <th>KODE BARANG</th>
                            <th>NAMA BARANG</th>
                            <th>TANGGAL UPDATE</th>
                            <th>JENIS BARANG</th>
                            <th>STOCK BARANG</th>
                            <th>HARGA</th>
                            <th>TOTAL</th>
                            <th>&nbsp;</th>
                        </tr>
                       <?php
            
        
            $lihat=$mysqli->query("select * from db_barang where kode_barang='$kode_barang'");
            while($baris=mysqli_fetch_assoc($lihat))
            {
        ?>
            <tr>
                <td><?php echo $baris['kode_barang']; ?></td>
                <td><?php echo $baris['nama_barang']; ?></td>
                 <td><?php echo $baris['tanggal']; ?></td>
                  <td><?php echo $baris['jenis_barang']; ?></td>
                <td><?php echo $baris['qty_barang']; ?> <?php echo $baris['satuan']; ?></td>
              
                <td>Rp.<?php $numbring = number_format ($baris['harga']);echo $numbring; ?></td>
                <td>Rp.<?php
				 $harga_total= $baris['harga'] * $baris['qty_barang'];
				 $numbring = number_format ($harga_total);echo $numbring; ?></td>
                <td><span class="label label-success">Validate</span></td>
               
            </tr>
           
        
        
        <?php
            }
        ?>        
                      </table>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
               </div>
           </div>
        
                    
                    
                    
                    
                    
            
            
            <?php
		}
		else
		{
			echo "<p style='color:red;'>(*) Kode Barang Tidak Ada..!</p>";
		}
		
		
	}

?>