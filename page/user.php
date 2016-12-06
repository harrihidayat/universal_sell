<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="label label-primary"> ADD CUSTOMER </span>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
        <li class="active">Kelola Customer</li>
      </ol>
    </section>
	<br>
   
      
    
     <script>
        
            function cek_cus(){
                var nama_customer =$("#nama_customer").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_customercek.php";
               
       
                var vars = "nama_customer="+nama_customer;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("validateuser").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("validateuser").innerHTML = "processing...";
            }
    </script>
    
    <script>
        
            function add_cus(){
                var nama_customer =$("#nama_customer").val();
				var alamat =$("#alamat").val();
				var no_telp =$("#no_telp").val();
				var jenis_customer =$("#jenis_customer").val();
             
			  	var keuntungan =$("#keuntungan").val();
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_customer.php";
               
       
                var vars = "nama_customer="+nama_customer+"&alamat="+alamat+"&no_telp="+no_telp+"&jenis_customer="+jenis_customer+"&keuntungan="+keuntungan;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("infor").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("infor").innerHTML = "processing...";
            }
    </script>
    
      <div class="box box-warning">
      	
        <div id="infor"></div>
        
        
        <input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user']; ?>">
    <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Customer</label>
                  <input autofocus class="form-control" type="text" name="nama_customer" placeholder="Nama Customer" id="nama_customer" onBlur="cek_cus();" onKeyUp="cek_cus();" required><span style="color:#F00;" id="validateuser"></span>
                </div>
                
         
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input maxlength="100" class="form-control" type="text" name="alamat" placeholder="Alamat Customer" id="alamat"  required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">No Telepon</label>
                  <input maxlength="14" class="form-control" type="text" name="no_telp" placeholder="No Telepon" id="no_telp" onKeyPress="return isNumberKey(event)" required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Customer</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_customer" id="jenis_customer" required>
            	<option value="">--Pilih--</option>
                <?php
					$ambil_jenis=$mysqli->query("select * from db_jenis_customer");
					while($baris_jenis=mysqli_fetch_assoc($ambil_jenis))
					{ ?>
                    	<option value="<?php echo $baris_jenis['jenis_customer']; ?>"><?php echo $baris_jenis['jenis_customer']; ?></option>
                    
					<?php	
					}
				?>
            </select>
                </div>
                
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Persentase Keuntungan Dari User Ini</label>
                  <select class="form-control select2" style="width: 100%;" name="keuntungan" id="keuntungan" required>
            	<option value="">--Pilih--</option>
                <?php
					for($i=1;$i<=100;$i++)
					{ ?>
                    	<option value="<?php echo $i; ?>"><?php echo $i; ?>%</option>
                    
					<?php	
					}
				?>
            </select>
                </div>
                
                
                <div class="form-group" align="center">
            		<input class="btn bg-maroon btn-flat  " width="100%" type="button" onClick="add_cus();" value="Add Customer">	
        		</div>
      
      
      
      
      </div>
    </div>
      
      
        <script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }		
	</script>
    
    
    
    
    
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Search Customer
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
        <li class="active">Kelola Customer</li>
      </ol>
    </section>
	<br>
    
     <script>
        
            function caricustomer(){
                var nama_customer =$("#nama_customer").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_custmercaricus.php";
               
       
                var vars = "nama_customer="+nama_customer;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("tampilcustomer").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("tampilcustomer").innerHTML = "processing...";
            }
    </script>
    
     <div class="box box-primary">
     	
        
        
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Customer</th>
                  <th>Jenis Customer</th>
                   <th>Alamat customer</th>
                  <th>No Telp Customer</th>	
                 <th>&nbsp;  </th>
                </tr>
                </thead>
                <tbody>
                <?php
					
					$barang=$mysqli->query("select * from db_customer");
					while($row=mysqli_fetch_assoc($barang))
					{ ?>
                    	 <tr>
                          <td><?php echo $row['nama_costomer']; ?></td>
                          <td><?php echo $row['jenis_customer']; ?></td>
                          <td><?php echo $row['alamat_customer']; ?></td>
                          <td><?php echo $row['no_telp']; ?></td>
                          <td align="center"><a onclick="return confirm('Anda Yakin Hapus User Ini ??');" href="page/del_user.php?id=<?php echo $row['id_customer']; ?>"><span class="label label-success">Delete</span></a></td>
                          
                        </tr>
                    
                    <?php
					}
				 ?>
             
              
        
                
                </tbody>
              
              </table>
           
            </div>
     
        
 
     </div>
    
    
    
    
    
    
    
  