<?php 
session_start();
include('connect.php');
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
	<link rel="stylesheet" type="text/css" href="style.css">
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
<div style="clear:both"></div>
            <br />
            <div class="table-responsive" style="margin: 50px 100px;">
                <table class="table table-bordered" border="1px solid grey;" style="text-align: center;">
                    <tr>
                        <th colspan="3" bgcolor=" #ffa500" style="font-size: 30px;">Feedback</th>
                    </tr>
                    <tr>
                        <th width="5%">Name</th>
                        <th width="5%">Email</th>
                        <th width="5%">Suggetion/Feedback</th>
                    </tr>
                    <?php
                $query = "SELECT * FROM feedback ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["message"]; ?></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                        
                </table>
            </div>
        </div>
    <br />
</body>
</html>
<?php } ?>