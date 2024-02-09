<?php 
$connect = mysqli_connect("localhost", "root", "", "homy");
$pid=intval($_GET['id']);
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$image=$_POST['image'];
	$price=$_POST['price'];
	$sql=mysqli_query($connect,"update  service set name='$name',image='$image',basicfare='$price' where id='$pid' ");
$_SESSION['msg']="Product Updated Successfully !!";

}


?>
<html>
<head>
	<title>Homy needs</title>
    <link rel="icon"  href="homy.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:400,600">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Work+Sans">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald:300,700|Varela+Round">
	<link rel="stylesheet" type="text/css" href="style.css">
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
<br><br>
    <div style="margin: 200px 700px 200px 500px;">
    	<form method="post">
    	<?php
                $query = "SELECT * FROM service WHERE id='$pid'";
                $result = mysqli_query($connect, $query);
                    while($row = mysqli_fetch_array($result))
                    {
         ?>
    	<table border="1" align="center" class="bod" width="500" height="500">
 <tr><th align="center" colspan="2" bgcolor=" #ffa500">Edit Service</th></tr>
 <tr>
 <th>Name</th>
 <td>
<input type="text" name="name" id="name" value="<?php echo $row["name"]; ?>"/><br>
 </td>
 </tr>
 <tr>
 <th>
 Image
 </th>
 <td>
<input type="text" name="image" id="image" value="<?php echo $row["image"]; ?>"><br>
 </td>
 </tr>
 <tr>
 <th>
Cost
 </th>
 <td>
 <input type="text" name="price" id="price" value="<?php echo $row["basicfare"]; ?>">
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center">
<input type="submit" value="UPDATE" name="submit" id="submit"> 
<?php } ?>
 </td>
 </tr>
 </table>         		
    	
    	</form>
    </div>
</body>
</html>