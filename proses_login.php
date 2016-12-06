<?php
	if(isset($_POST['login']))
	{
		include('db/koneksi.php');	
		$username=mysqli_real_escape_string($mysqli,$_POST['username']);
		$pas=mysqli_real_escape_string($mysqli,$_POST['pas']);
		$pas_en=md5(sha1(md5($pas)));
		
		$cek_username_pas= $mysqli->query("select count(*) as login from user where user_name='$username' AND pas='$pas_en' AND status='admin'");
		$data=mysqli_fetch_assoc($cek_username_pas);
		if($data['login'] > 0 )
		{
			$user= $mysqli->query("select * from user where user_name='$username' AND pas='$pas_en'");
			$data_user=mysqli_fetch_assoc($user);
			$_SESSION['nama'] = $data_user['nama_user'];
			$_SESSION['username'] = $data_user['user_name'];
			$_SESSION['id_user'] = $data_user['id_user'];
			$_SESSION['status'] = $data_user['status'];	
			echo "<script>alert('Login Berhasil, Selamat Datang $username');document.location='index.php'</script>";
		}
		else
		{
			
			echo "<script>alert('Login Gagal, Username Dan Password Tidak Cocok');document.location='index.php'</script>";
		}
		
	}

?>
