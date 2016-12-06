 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="label label-primary"> Laporan Pembelian </span> 
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Search</a></li>
        <li class="active">Laporan Pembelian</li>
      </ol>

      <button style="margin-top: 1em" type="button" class="btn btn-info" onClick="window.print()">Cetak laporan</button>


    </section>
	<br>
    
    
    
    
    
    <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th colspan="6">Tanggal & Waktu Transaksi Pembelian Barang</th>
                </tr>
                </thead>
                <tbody>
              <?php
              $transaksi=$mysqli->query("select distinct tanggal_transaksi from db_transaksi where jenis_transaksi=2");
              while($row=mysqli_fetch_assoc($transaksi))
              
              { ?>
              	  <tr>
                    <td colspan="6"><h4>Tanggal: <?php echo $row['tanggal_transaksi']; ?></h4></td>
                  </tr>
                  <tr>
                    <td>ID Bon</td>
                    <td>Kode Barang</td>
                    <td>Nama Barang</td>
                    <td>Quantity</td>
                    <td>Harga</td>
                    <td>Total Harga</td>
                  </tr>
                    <?php
                    $tanggal = $row['tanggal_transaksi'];
                    $transaksi_detail=$mysqli->query("select * from db_transaksi where tanggal_transaksi='$tanggal'");
                    // die(print_r($transaksi_detail));
                    while($detail=mysqli_fetch_assoc($transaksi_detail))
                    { ?>
                    
                    <tr>
                      <td><?php echo $detail['id_bon']; ?></td>
                      <td><?php echo $detail['kode_barang']; ?></td>
                      <td><?php echo $detail['nama_barang']; ?></td>
                      <td><?php echo $detail['qty']; ?></td>
                      <td><?php echo 'Rp. ' . number_format ($detail['harga']); ?></td>
                      <td><?php echo 'Rp. ' . number_format ($detail['harga'] * $detail['qty']); ?></td>
                    </tr>

                    

                    <?php } ?>
                    
                       <?php 
                    $query_grand_total = $mysqli->query("select sum(harga * qty) as gt from db_transaksi where tanggal_transaksi='$tanggal'");
                    $grand_total = mysqli_fetch_assoc($query_grand_total);
                    // print_r($grand_total);
                    ?>

                    <tr>
                      <td colspan="5"><b style="float: right;">Grand Total:</b></td>
                      <td><b><?php echo 'Rp. ' . number_format ($grand_total['gt']); ?></b></td>
                    </tr>               
              <?php } ?>    
                </tbody>
              
              </table>
           
            </div>
            <!-- /.box-body -->
          </div>
          