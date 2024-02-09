<?php 
	session_start();
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	include ('connect.php');
        //signup part
	if (isset($_POST['reg_user'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password_1 = $_POST['password_1'];
        $_SESSION['a'][0]=$username;
        $_SESSION['a'][2]=md5($password_1);
        $_SESSION['a'][1]=$email;
		header('Location:reg_upload.php');
    }
    
//md5 login
	
	if (isset($_POST['login_user'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
        $epassword = $password;
		if (empty($name)) {
			array_push($errors, "username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$name' AND password='$password'";
			$results = mysqli_query($db, $query);
					
			if (mysqli_num_rows($results) == 1) {
                $_SESSION['epassword']=$password;
                $_SESSION['password'] = $epassword;
				$_SESSION['uname'] = $name;
				$_SESSION['success'] = "You are now logged in";
				while($row = mysqli_fetch_array($results))
					{
						$_SESSION['id']=$row['id'];
					}
				header('location: log_img1.php');
                unset($_SESSION['error']);
			}else {
                $_SESSION['error']="Wrong username/password combination.";
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
       
?>