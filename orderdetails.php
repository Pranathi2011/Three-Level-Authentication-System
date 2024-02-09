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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <th colspan="12" bgcolor=" #ffa500" style="font-size: 30px;">Booking Details</th>
                    </tr>
                    <tr>
                        <th width="3%">Booking id</th>
                        <th width="5%">Service Id</th>
                        <th width="5%">Service name</th>
                        <th width="5%">Customer name</th>
                        <th width="5%">Mobile</th>
                        <th width="5%">Booking Address</th>
                        <th width="5%">Service Date</th>
                        <th width="5%">Service time</th>
                        <th width="5%">Booking Date</th>
                        <th width="5%">ACTION</th>
                    </tr>
                    <?php
                $query = "SELECT * FROM booking ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["serviceId"]; ?></td>
                        <td><?php echo $row["servicename"]; ?></td>
                        <td><?php echo $row["fullname"]; ?></td>
                        <td><?php echo $row["mobile"]; ?></td>
                        <td><?php echo $row["address"];?></td>
                        <td><?php echo $row["servicedate"];?></td>
                        <td><?php echo $row["servicetime"];?></td>
                        <td><?php echo $row["bookingdate"];?></td>
                        <td><a href="updateorder.php?id=<?php echo $row['id'];?>" title="Update order"><i class="fa fa-edit"></i></td>
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