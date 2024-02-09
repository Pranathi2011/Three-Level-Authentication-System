<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "homy");
if(strlen($_SESSION['alogin'])==0){
    header('location:welcome.php');
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homy needs</title>
    <link rel="icon"  href="homy.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:400,600">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Work+Sans">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:300,700|Varela+Round">
	<link rel="stylesheet" type="text/css" href="style1.css">
     <style>
input[type=text],input[type=password],input[type=number],input[type=date],input[type=email],
textarea{
 border: none;
 border: 1px solid #c4c4c4;
 border-radius: 5px;
 padding: 3px 5px;
 background-color: #fff;
 box-shadow: inset 0 3px 6px rgba(0,0,0,0.1);
 width: 190px;
}
table.bod{
 border-radius: 5px;
 user-select: none;
}
input[type=button],input[type=submit]{
 width: 5cm;
 height: 10mm;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu,
Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 background-color: #ffa500 ;
 border-radius: 2mm;
 border: none;
}
 </style>
</head>
<body>
	<div class="topnav">
       <a href="addproduct.php">ADD SERVICES</a>
       <a href="productdetail.php">SERVICE DETAILS</a>
       <a href="orderdetails.php">BOOKINGS</a>
       <a href="feedback.php">FEEDBACK</a>
       <a href="alogout.php" style="float: right;">LOG OUT</a>
    </div>
</div>
</div>
<br><br>
    <div style="margin: 100px 700px 200px 500px;">
    	<form method="post" action="add.php">
    	<table border="1" align="center" class="bod" width="500" height="500">
 <tr><th align="center" colspan="2" bgcolor=" #ffa500">Add Services</th></tr>
 <tr>
 <th>ID</th>
 <td>
 <input type="text" name="id" id="id"/><br>
 </td>
 </tr>
 <tr>
 <th>Name</th>
 <td>
<input type="text" name="name" id="name"><br>
 </td>
 </tr>
 <tr>
 <th>
 Image
 </th>
 <td>
<input type="text" name="image" id="image"><br>
 </td>
 </tr>
 <tr>
 <th>
Cost
 </th>
 <td>
 <input type="text" name="price" id="price">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center">
<input type="submit" value="ADD SERVICE"> 
 </td>
 </tr>
 </table>  		
    	</form>
    </div>
</body>
</html>
<?php } ?>