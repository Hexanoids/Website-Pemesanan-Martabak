<?php
	require_once '../conn.php';
	session_start();
	if(ISSET($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
	
		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = mysqli_num_rows($query);
		
		if($row > 0){
			$_SESSION['id_user']=$fetch['id_user'];
			echo "<script>alert('Login Successfully!')</script>";
			echo "<script>window.location='../home-dashboard.php'</script>";
		}else{
			echo "<script>alert('Invalid username or password')</script>";
			echo "<script>window.location='login.php'</script>";
		}
		
	}

?>