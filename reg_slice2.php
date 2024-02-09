<?php
session_start();
ob_start();
?>

<html>
<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
      <script src="slice2.js"></script>
      <style>
      img{
          margin:10px;
          padding:10px;
      }
      </style>
</head>

<?php
	$var=$_GET['var'];
	$_SESSION['a'][7]=$_GET['var'];	
       $_SESSION['layer3']=$_GET['var'];
?>

<body style="background-color: #f5f5f5;">


<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_info">
				<h2>Create New Account</h2>
				<p class="account1">Following is the 2nd image you chose.</p>
                <img src="<?php echo $var; ?>" onload="changeIt(this)" height="100" width="100">
                <p class="account">Select one from below four parts.</p>
				<center><div class="test" id="test"></div></center>
			</div>
		</div>
	</div>
</div>

</body>

</html>

