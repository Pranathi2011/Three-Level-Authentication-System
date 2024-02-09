<?php 
    session_start();
    include('connect.php');
	$username=$_POST['user'];
	$password=$_POST['pass'];
	$username=stripcslashes($username);
	$password=stripcslashes($password);
	$username=mysqli_real_escape_string($con,$username);
	$password=mysqli_real_escape_string($con,$password);
	$sql="select * from admin where name='$username' and password='$password'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if($count==1)
	{
		echo "<script>alert('Logged in successfully') </script>";
		$_SESSION['alogin']=$row['id'];
        if($row['role']=="admin"){
            header('location:addproduct.php');
        }
		else{
            $_SESSION['aname']=$row['name'];
            $_SESSION['role']=$row['role'];
            $_SESSION['image']=$row['photo'];
            header('location:technicians.php');
        }
	}
	else{
		echo "<script>alert('Invalid username/password') </script>";
		header('location:admin.php');
	}
?>