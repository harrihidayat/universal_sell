 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       <span class="label label-primary"> Add Barang Baru </span>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Barang</a></li>
        <li class="active">Add Barang</li>
      </ol>
    </section>
	<br>

<script src="js/jquery.js"></script>
    <script>
        
            function save(){
                var nama_barang =$("#nama_barang").val();
                var kode_barang =$("#kode_barang").val();
                var jenis_barang =$("#jenis_barang").val();
				var qty =$("#qty").val();
				var harga =$("#harga").val();
				var satuan =$("#satuan").val();
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_barangphp.php";
               
       
                var vars = "nama_barang="+nama_barang+"&kode_barang="+kode_barang+"&jenis_barang="+jenis_barang+"&qty="+qty+"&harga="+harga+"&satuan="+satuan;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("save1").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("save1").innerHTML = "processing...";
            }
    </script>
    <script>
        
            function lihat(){
                var id_user =$("#id_user").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_baranglihatphp.php";
               
       
                var vars = "id_user="+id_user;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("lihat1").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("lihat1").innerHTML = "processing...";
            }
    </script>
    
    <script>
        
            function bersi(){
                
				var id_user =$("#id_user").val();
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_barangclearallphp.php";
               
       
                var vars = "id_user="+id_user;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("save1").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("save1").innerHTML = "processing...";
            }
    </script>
    <script>
    function add_all(){
                var id_user =$("#id_user").val();
               
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_barangall.php";
               
       
                var vars = "id_user="+id_user;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("save1").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("save1").innerHTML = "processing...";
            }
    </script>
    <script>
        
            function akode(){
                var kode_barang =$("#kode_barang").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_barangakode.php";
               
       
                var vars = "kode_barang="+kode_barang;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("akode").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("akode").innerHTML = "processing...";
            }
    </script>
    
    <script>
        
            function anama(){
                var nama_barang =$("#nama_barang").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_baranganama.php";
               
       
                var vars = "nama_barang="+nama_barang;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("anama").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("anama").innerHTML = "processing...";
            }
    </script>



	

 <div class="box">

<div id="save1" onKeyUp="lihat();"></div>


<form method="post">
<input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user']; ?>" />

		<div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input autofocus class="form-control" type="text" name="kode_barang" placeholder="Kode Barang" id="kode_barang" onBlur="akode();" required><span style="color:#F00;" id="akode"></span>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" id="nama_barang" maxlength="50" onBlur="anama();" required><span style="color:#F00;" id="anama"></span>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Barang</label>
                  <select class="form-control select2" style="width: 100%;" name="jenis_barang" id="jenis_barang" required>
            	<option value="">--Pilih--</option>
                <?php
					$ambil_jenis=$mysqli->query("select * from db_jenis_barang");
					while($baris_jenis=mysqli_fetch_assoc($ambil_jenis))
					{ ?>
                    	<option value="<?php echo $baris_jenis['nama_jenis']; ?>"><?php echo $baris_jenis['nama_jenis']; ?></option>
                    
					<?php	
					}
				?>
            </select>
                </div>
                
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Satuan Barang</label>
                  <select class="form-control select2" style="width: 100%;" name="satuan" id="satuan" required>
            	<option value="">--Pilih--</option>
                <?php
					$ambil_jenis=$mysqli->query("select * from db_jenis_satuan");
					while($baris_jenis=mysqli_fetch_assoc($ambil_jenis))
					{ ?>
                    	<option value="<?php echo $baris_jenis['satuan']; ?>"><?php echo $baris_jenis['satuan']; ?></option>
                    
					<?php	
					}
				?>
            </select>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input class="form-control" type="text" name="qty" placeholder="Quantity" id="qty" onKeyPress="return isNumberKey(event)" maxlength="6" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga Satuan</label>
                  <input class="form-control"  type="text" name="harga" placeholder="Harga" id="harga" maxlength="10" onKeyPress="return isNumberKey(event)" required>
                </div>
                
        

		 	<div class="form-group" align="center">
	
            <input class="btn bg-navy btn-flat" type="button" name="add" value="Tambah Chart Barang" id="add" onClick="save(); lihat();" onBlur="lihat();"  >
            <input class="btn bg-navy btn-flat" type="reset" value="Reset"> 
            <input class="btn bg-navy btn-flat" type="button" name="hapus" value="Bersihkan Chart" id="hapus" onClick="bersi(); lihat();" onBlur="lihat();" > 
            <input class="btn bg-maroon btn-flat  " width="100%" type="button" onClick="add_all(); lihat();" onBlur="lihat();" value="Tambah Semua Chart Ke Stok">	
        	</div>
         </div>
	
</form> <br /><br />

<body onLoad="lihat();">
	<div id="lihat1"></div>
</body>

</div>


<script>
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }		
</script>
