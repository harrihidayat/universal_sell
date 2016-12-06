<?php
	include('../db/koneksi.php');

	$id_user=$_SESSION['id_user'];
	$tanggal=$mysqli->query("select * from db_add_penjualan_pending where id_user='$_SESSION[id_user]'");
	$tanggal=mysqli_fetch_assoc($tanggal);
?>
<div class="row">
        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 style="width:50%;" class="box-title">List Chart Penjualan</h3>
			  <span style="float:right;">Tanggal : <?php  echo $tanggal['tanggal']; ?></span>
             
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>QTY BARANG</th>
                    <th>HARGA JUAL</th>
                    <th>HARGA TOTAL</th>
                    <th>&nbsp;</th>
                </tr>
               <?php
	$lihat=$mysqli->query("select * from db_add_penjualan_pending where id_user='$_SESSION[id_user]'");
	while($baris=mysqli_fetch_assoc($lihat))
	{
?>
	<tr>
    	<td><?php echo $baris['kode_barang']; ?></td>
        <td><?php echo $baris['nama_barang']; ?></td>
        <td><?php echo $baris['qty']; ?></td>
        <td>Rp.<?php $numbring = number_format ($baris['harga']);echo $numbring; ?></td>
        <td>Rp.<?php $all_harga= $baris['harga'] * $baris['qty']; 
				  $numbring = number_format ($all_harga);echo $numbring;
		?></td>
        <td><span class="label label-success"><a style="color:#FFF;" onclick="return confirm('Anda Yakin Ingin ?')" href="page/del_penjualanchart.php?id=<?php echo $baris['kode_barang']; ?>">Hapus</a></span></td>
       
    </tr>
   


<?php
	}
?>
	<tr>
    	<th colspan="4">TOTAL</th><th colspan="2">Rp.<?php 
			$total=$mysqli->query("select sum(harga * qty) as total from db_add_penjualan_pending where id_user='$_SESSION[id_user]'");
			$total_harga=mysqli_fetch_assoc($total);
			 $numbring = number_format ($total_harga['total']);echo $numbring;
	
		 ?></th>
    </tr>
    </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
