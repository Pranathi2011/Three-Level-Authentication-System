<?php
session_start();
include('connect.php');
ob_start();
?>

<html>
<head>

	<title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<script>
		// passing the selected image reference to slice the image
		function changeIt(img)
		{
		var name = img.src;
		console.log(name);
		window.location.href = "log_slice1.php?var="+name; 

		}
	</script>
    <style>
      img{
          margin:10px;
          padding:10px;
      }
      </style>
</head>

<body style="background-color: #f5f5f5;">


<!-- login form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_info">
				<h2>Login to your Account</h2>
				<p class="account1">Select the 1st image you set for the graphical password.</p>
				<center>
					<?php
					$uname=$_SESSION['uname'];
        $query = "SELECT * FROM regusers WHERE username ='$uname'";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
                <img class="im" src="<?php echo $row["i1"]; ?>" onclick="changeIt(this)" height="200" width="200">
				<img class="im" src="<?php echo $row["i2"]; ?>" onclick="changeIt(this)" height="200" width="200">
				<img class="im" src="<?php echo $row["i3"]; ?>" onclick="changeIt(this)" height="200" width="200">
				<img class="im" src="<?php echo $row["i4"]; ?>" onclick="changeIt(this)" height="200" width="200">
				<img class="im" src="<?php echo $row["i5"]; ?>" onclick="changeIt(this)" height="200" width="200">
		<?php  } }?>
				</center>
			</div>
		</div>
	</div>

</div>



</body>
</html>