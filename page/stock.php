 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="label label-primary"> Search Barang </span>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Search</a></li>
        <li class="active">Search Barang</li>
      </ol>
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
                  <th>Kode Barang</th>
                  <th>Nama Barang</th>
                   <th>Tanggal Update</th>
                  <th>Jenis Barang</th>
                  <th>Qty</th>
                  <th>Harga</th>
                 <th>Total Harga</th>
                </tr>
                </thead>
                <tbody>
                <?php
					$barang=$mysqli->query("select * from db_barang");
					while($row=mysqli_fetch_assoc($barang))
					{ ?>
                    	 <tr>
                          <td><?php echo $row['kode_barang']; ?></td>
                          <td><?php echo $row['nama_barang']; ?></td>
                          <td><?php echo $row['tanggal']; ?></td>
                          <td><?php echo $row['jenis_barang']; ?></td>
                          <td><?php echo $row['qty_barang']; ?> <?php echo $row['satuan']; ?></td>
                          <td>Rp.<?php $numbring = number_format ($row['harga']);echo $numbring; ?></td>
                          
                          <td>Rp.<?php 
						  $total= $row['qty_barang'] * $row['harga'];
						$numbring = number_format ($total);echo $numbring;
						  
						   ?></td>
                        </tr>
                    
                    <?php
					}
				 ?>
             
              
        
                
                </tbody>
              
              </table>
           
            </div>
            <!-- /.box-body -->
          </div>
          