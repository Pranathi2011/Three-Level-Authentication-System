<?php 
session_start();
include('connect.php');
if(strlen($_SESSION['name'])==0){
	header('location:login.php');
}
else{
?>
<html>
 <head>
 <title>Homy needs</title>
   <link rel="icon"  href="homy.png" type="image/x-icon">
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
 <style>
input[type=text],input[type=password],input[type=number],input[type=date],input[type=email],textarea{
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
 width: 2cm;
 height: 10mm;
 font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu,
Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
 background-color: #ffa500 ;
 border-radius: 2mm;
 border: none;
}
 </style>
 <script type="text/javascript">
function conform(){
 confirm("Are you sure wnat to proceed");
 }
 </script>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<?php include('header.php');?>
 	<br><br><br><br><br>
 <form name="f1" method="post" action="pay.php" >
 <table border="1" align="center" class="bod" width="500" height="500">
 <tr><th align="center" colspan="2" bgcolor=" #ffa500">Add Address</th></tr>
<tr>
 <th>Country</th>
 <td>
 <select name="country">
 <option>India</option>
 <option>USA</option>
 <option>London</option>
 <option>China</option>
 </select>
 </td>
 </tr>
 <tr>
 <th>Full Name</th>
 <td>
 <input type="text" name="name" id="name"><br>
 </td>
 </tr>
 <tr>
 <th>Mobile Number</th>
 <td>
 <input type="text" name="mob" id="mob"><br>
 </td>
 </tr>
 <tr>
 <th>
 Pincode
 </th>
 <td>
 <input type="text" name="pin" id="pin"><br>
 </td>
 </tr>
 <tr>
 <th>
Address
 </th>
 <td>
 <textarea name="address" id="address" rows="5" cols="50"></textarea>
 </td>
 </tr>
 <tr>
 <td colspan="2" align="center">
 <input type="submit" name="proceed" value="Proceed" onclick="conform()">
<a href="home.php"><input type="button" name="cancel" value="Cancel"></a>
 </td>
 </tr>
 </table>
 </form>
 </body>
</html>
<?php } ?>