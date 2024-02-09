<?php include('server.php'); ?>
<?php
if (isset($_POST['submit'])) {
$email = $_POST['email'];
$password_1 = $_POST['password'];
$password_2 = $_POST['c_password'];
$password_3 = md5($password_1);
$password_4 = md5($password_2);
$sql2= "UPDATE users SET password ='$password_3' WHERE email='$email'"; 
$result = mysqli_query($db, $sql2) or die(mysqli_error($db)); 
header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homy needs</title>
      <link rel="icon"  href="homy.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <style type="text/css">
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

</head>
<body>
    <br><br><br>
<form name="Login" method="POST" action="fpassword.php" >

    <table align="center"  class="cl" border="1px solid grey;">
        <tr>
            <th colspan="2" bgcolor=" #ffa500" style="font-size: 30px;">Reset Password</th>
        </tr>
        <tr>
            <th>E-mail</th>
            <td><input type="text" name="email" id="gm" required></td>
        </tr>
      
        <tr>
            <th>Password</th>
            <td><input type="password" name="password" class="round"></td>
        </tr>
        <tr>
            <th>Confirm_Password</th>
            <td><input type="password" name="c_password" required  class="round" required ></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" class="round" id="s"></td>
        </tr>
    </table>
    </form>
</body>
</html>