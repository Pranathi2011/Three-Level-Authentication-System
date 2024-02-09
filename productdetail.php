<?php 
session_start();
include('connect.php');
if(strlen($_SESSION['alogin'])==0){
    header('location:welcome.php');
}
else{

if(isset($_GET['del']))
          {
                  mysqli_query($connect,"delete from service where id = '".$_GET['id']."'");
                  $_SESSION['delmsg']="Product deleted !!";
          }

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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link type="text/css" href="css/theme.css" rel="stylesheet">
    <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
                        <th colspan="6" bgcolor=" #ffa500" style="font-size: 30px;">Service Details</th>
                    </tr>
                    <tr>
                        <th width="3%">Service id</th>
                        <th width="5%">Service Name</th>
                        <th width="5%">image</th>
                        <th width="5%">price</th>
                        <th width="5%">ACTION</th>
                    </tr>
                    <?php
                $query = "SELECT * FROM service ORDER BY id ASC";
                $result = mysqli_query($connect, $query);
                if(mysqli_num_rows($result) > 0)
                {
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><img src="<?php echo $row["image"]; ?>"></td>
                        <td><?php echo $row["basicfare"]; ?></td>
                        <td><a href="editproduct.php?id=<?php echo $row['id']?>" ><i class="fa fa-edit"></i></a>
                                            <a href="productdetail.php?id=<?php echo $row['id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"><i class="fa fa-remove"></i></a></td>
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
<?php }?>