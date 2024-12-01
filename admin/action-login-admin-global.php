<?php
	require_once '../conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `admin_global` WHERE `email` = '$email' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['id_admin_g']=$fetch['id_admin_g'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='./global-home-dashboard.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='login-admin-global.php'</script>";
		}
		
	}

?>