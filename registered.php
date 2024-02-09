<?php
session_start();
ob_start();
?>

<html>
<head>
<title>Successful!</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta charset="utf-8">

      <link rel="stylesheet" href="css/style-footer.css">
	<link href="css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
      <link href="css/style-body.css" rel="stylesheet" type="text/css" media="all"/>
      
</head>

<?php

include('connect.php');

$i1=$_SESSION['i1'];
$i2=$_SESSION['i2'];
$i3=$_SESSION['i3'];
$i4=$_SESSION['i4'];	
$i5=$_SESSION['i5'];
$username=$_SESSION['a'][0];
$password=$_SESSION['a'][2];
$email=$_SESSION['a'][1];
$image1=$_SESSION['a'][5];
$slice1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$slice2=$_SESSION['a'][8];
$image3=$_SESSION['a'][9];
$slice3=$_SESSION['a'][10];
$pattern=md5($_GET['pattern']);
$_SESSION['name']=$_SESSION['a'][0];
$query="INSERT into users(username,email,password,image1,slice1,image2,slice2,image3,slice3,pattern) values('$username','$email','$password','$image1','$slice1','$image2','$slice2','$image3','$slice3','$pattern')";
$result=mysqli_query($con, $query);
$query1="INSERT into regusers(username,email,password,i1,i2,i3,i4,i5) values('$username','$email','$password','$i1','$i2','$i3','$i4','$i5')";
$result1=mysqli_query($con, $query1);

header('Location:home.php');
?>

<body>


</body>
</html>