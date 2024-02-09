<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>

<?php
session_start();
include('connect.php');
$tech=$_SESSION['aname'];
echo $_SESSION['aname'];
echo $_SESSION['role'];
$query = "SELECT * FROM booking WHERE technician='$tech'";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center mt-5">
<thead>
                    <tr class="table-success">
                        <th colspan="11" style="font-size: 30px;">Bookings</th>
                    </tr>
                    <tr class="table-info">
                    <th>#</th>
                        <th>Booking id</th>
                        <th>Service Id</th>
                        <th>user-Phone</th>
                        <th>Address</th>
                        <th>Service Date</th>
                        <th>Service Time</th>
                        <th>OTP</th>
                        <th>Booking date and Time</th>
                        <th>Name of Tech</th>
                        <th>Status</th>
                    </tr>
                    </thead>
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
    <td><?php echo $row["technician"];?></td>
    <td><?php echo $row["servicestatus"];  ?></td>
</tr>
</table>
</div>
</div>
<?php include('footer.php');?>
<?php
}
}
?>
</body>
</html>