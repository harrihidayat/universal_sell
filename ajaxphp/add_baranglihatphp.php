<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">List Chart Barang Baru</h3>

             
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>JENIS BARANG</th>
                    <th>QTY BARANG</th>
                    <th>TANGGAL</th>
                    <th>SATUAN</th>
                    <th>HARGA</th>
                    <th>TOTAL</th>
                    <th>&nbsp;</th>
                </tr>
               <?php
	include('../db/koneksi.php');

	$id_user=$_POST['id_user'];
	$lihat=$mysqli->query("select * from db_add_barang_pending where id_user='$_SESSION[id_user]'");
	while($baris=mysqli_fetch_assoc($lihat))
	{
?>
	<tr>
    	<td><?php echo $baris['kode_barang']; ?></td>
        <td><?php echo $baris['nama_barang']; ?></td>
        <td><?php echo $baris['jenis_barang']; ?></td>
        <td><?php echo $baris['qty_barang']; ?></td>
        <td><?php echo $baris['tanggal']; ?></td>
        <td><?php echo $baris['satuan']; ?></td>
        <td>Rp.<?php $numbring = number_format ($baris['harga']);echo $numbring; ?></td>
        <td>Rp.<?php $numbring = number_format ($baris['harga_total']);echo $numbring; ?></td>
        <td><span class="label label-success"><a style="color:#FFF;" onclick="return confirm('Anda Yakin Ingin Hapus Barang Ini ?')" href="page/del_addchardel.php?id=<?php echo $baris['kode_barang']; ?>">Hapus</a></span></td>
       
    </tr>
   


<?php
	}
?>
	 <tr style="background-color:#000; color:#FFF;">
    	<td colspan="7">TOTAL</td>
        <td ><?php  
		$total=$mysqli->query("select sum(harga_total) as total from db_add_barang_pending where id_user='$_SESSION[id_user]'");
		$ambil_total=mysqli_fetch_assoc($total);
		
			$numbring = number_format ($ambil_total['total']);
			echo "Rp.".$numbring;
		
		?></td>
    </tr>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
