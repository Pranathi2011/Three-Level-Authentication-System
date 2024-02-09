<?php
session_start();
include('connect.php');
$id=$_SESSION['id'];
$country = mysqli_real_escape_string($db, $_POST['country']);
$name = mysqli_real_escape_string($db, $_POST['name']);
$mob = mysqli_real_escape_string($db, $_POST['mob']);
$pin = mysqli_real_escape_string($db, $_POST['pin']);
$address=mysqli_real_escape_string($db,$_POST['address']);
$sql = "UPDATE booking  set country='$country',fullname='$name',mobile='$mob',pincode='$pin',address='$address' where userId='$id'";
if(mysqli_query($db, $sql)){
    echo '<script>alert("Address saved successfully.")</script>';
    header('location:home.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
mysqli_close($db);
?>