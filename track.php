<?php 
session_start();
include('connect.php');
if(strlen($_SESSION['id'])==0){
	header('location:welcome.php');
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homy needs</title>
      <link rel="icon"  href="homy.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #f5f5f5;">
<?php include('header.php'); ?>
<div class="container">
            <div class="table-responsive mt-5">
                <table class="table table-striped table-hover text-center">
                    <thead>
                    <tr class="table-success">
                        <th colspan="12" style="font-size: 30px;">SERVICE STATUS</th>
                    </tr>
                    <tr class="table-info">
                        <th>Booking id</th>
                        <th>Service Id</th>
                        <th>Service name</th>
                        <th>Mobile</th>
                        <th>Booking Address</th>
                        <th>Service Date</th>
                        <th>Service time</th>
                        <th>OTP</th>
                        <th>Booking Date</th>
                        <th>Assigned Technician</th>
                        <th>Service Status</th>
                    </tr>
                    </thead>
                    <?php
                    $id=$_SESSION['id'];
                $query = "SELECT * FROM booking WHERE userId=$id";
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
                        <td><?php echo $row["mobile"]; ?></td>
                        <td><?php echo $row["address"];?></td>
                        <td><?php echo $row["servicedate"];?></td>
                        <td><?php echo $row["servicetime"];?></td>
                        <td><?php echo $row["otp"];?></td>
                        <td><?php echo $row["bookingdate"];?></td>
                        <td><?php if(is_null($row["technician"])==1){echo "Not assigned";}else{echo $row["technician"];}?>
                        <td><?php echo $row["servicestatus"];  ?></td>
                    </tr>
                    <?php
                    }
                }
                    ?>
                        
                </table>
            </div>
        </div>
<?php include('footer.php');?>
</body>
</html>
<?php } ?>