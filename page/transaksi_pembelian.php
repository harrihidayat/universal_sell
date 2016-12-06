<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <span class="label label-primary"> Pembelian Barang </span>
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Barang</a></li>
        <li class="active">Pembelian Barang</li>
      </ol>
    </section>
	<br>
    
    
     <script>
        
            function akode(){
                var kode_barang =$("#kode_barang").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_stockcekkode.php";
               
       
                var vars = "kode_barang="+kode_barang;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("validatestok").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("validatestok").innerHTML = "processing...";
            }
    </script>
    
    <script>
        
            function add_chart(){
                var kode_barang =$("#kode_barang").val();
				var qty =$("#qty").val();
				var harga =$("#harga").val();
               
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_stockaddchart.php";
               
       
                var vars = "kode_barang="+kode_barang+"&qty="+qty+"&harga="+harga;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("info").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("info").innerHTML = "processing...";
            }
    </script>
    
     <script>
        
            function lihat(){
                var kode_barang =$("#kode_barang").val();

                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_stocklihatchart.php";
               
       
                var vars = "kode_barang="+kode_barang;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("lihatchart").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("lihatchart").innerHTML = "processing...";
            }
    </script>
     <script>
        
            function bersichartstock(){
                
				var id_user =$("#id_user").val();
                
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_stockclearall.php";
               
       
                var vars = "id_user="+id_user;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("info").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("info").innerHTML = "processing...";
            }
    </script>
    
     <script>
    function add_all(){
                var id_user =$("#id_user").val();
               
                 var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
                var url = "ajaxphp/add_stockall.php";
               
       
                var vars = "id_user="+id_user;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                        if(hr.readyState == 4 && hr.status == 200) {
                                var return_data = hr.responseText;
                                    document.getElementById("info").innerHTML = return_data;
                                    
                        }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
                document.getElementById("info").innerHTML = "processing...";
            }
    </script>
    
    
    
   <div class="box">
    <div id="info"></div>
    <input type="hidden" id="id_user" value="<?php echo $_SESSION['id_user']; ?>">
    <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Barang</label>
                  <input autofocus class="form-control" type="text" name="kode_barang" placeholder="Kode Barang" id="kode_barang" onBlur="akode();" onKeyUp="akode();" required><span style="color:#F00;" id="akode"></span>
                </div>
                
                <div id="validatestok"></div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input maxlength="9" class="form-control" type="text" name="qty" placeholder="Banyak Barang Masuk / Satuan" id="qty" onKeyPress="return isNumberKey(event)" required>
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputEmail1">Harga Beli</label>
                  <input maxlength="11" class="form-control" type="text" name="harga" placeholder="IDR" id="harga" onKeyPress="return isNumberKey(event)" required>
                </div>
                
                
                <div class="form-group" align="center">
	
            <input class="btn bg-navy btn-flat" type="button" name="add" value="Tambah Chart" id="add" onClick="add_chart(); lihat();" onBlur="lihat();" >
            <input class="btn bg-navy btn-flat" type="button" name="hapus" value="Bersihkan Chart" id="hapus" onClick="bersichartstock(); lihat();"  onBlur="lihat();" > 
         <input type="button" onClick="add_all(); lihat();" onBlur="lihat();" width="100%"  class="btn bg-maroon btn-flat"  value="Transaksi Selesai">	
        	</div>
     </div>
     
    
    <body onLoad="lihat();">
    
    
	<div id="lihatchart"></div>
    
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
