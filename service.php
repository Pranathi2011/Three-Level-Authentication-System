<?php 
session_start();
include('connect.php');
if(strlen($_SESSION['id'])==0){
	header('location:login.php');
}
else{
  if(isset($_POST["book_service"]))
  {
    $id=$_GET["id"];
    $query = "SELECT * FROM service where id=$id";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
            $id=$row["id"];
            $id1=$_SESSION['id'];
            $amount = $row["basicfare"];
            $name = $row["name"];
            $date = $_POST["date"];
            $time = $_POST["time"];
            $fullname = $_POST["name"];
            $mobile = $_POST["mobile"];
            $country = $_POST["country"];
            $pin = $_POST["pin"];
            $address = $_POST["address"];
            $otp=rand(100000,999999);
            $sql = "INSERT INTO booking (userId,fullname,mobile,country,pincode,address,serviceId,servicename,servicedate,servicetime,servicecost,otp) VALUES ('$id1','$fullname','$mobile','$country','$pin','$address','$id','$name','$date','$time','$amount','$otp')";
            mysqli_query($connect,$sql);
              echo '<script>alert("Registered sucessfully")</script>';
              header("location:home.php");
          }
        }
      }
?>
<!DOCTYPE html>
<html>
<head>
  <title> Homy needs</title>
  <link rel="icon"  href="homy.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style type="text/css">
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  float: left;
  margin: 0px 0px 10px 10px;
  text-align: center;
  background-color: red;
  color: white;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>
</head>
<body style="background-color: #f5f5f5;">
  <?php include('header.php');?>
  <div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-2 g-1 mx-auto">
<div class="col mt-5 pe-2">
    <?php
    $id=$_GET["id"];
        $query = "SELECT * FROM service where id=$id";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
<div class="card mx-5">
  <legend><?php echo $row["name"]; ?></legend>
  <img src="<?php echo $row["image"]; ?>" alt="<?php echo $row["name"]; ?>" style="width: 151px;height: 200px;">
</div>
<div style="float: left; border: 5px solid grey;" class="mt-4 p-2"><h4 class="text-danger">NOTE:</h4>*It is recomended to book the service before 24hrs <br>*Must book before 3hrs<br>*Charges exclude material costs<br>*For queries send message through contact page<br>*Check the website regularly for new updates</div>
</div>
<div class="col mt-5 ps-1">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <form method="post" action="service.php?action=add&id=<?php echo $row["id"]; ?>">
	<tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"><b>Service Charges !</b></div></td>
      
    </tr>
	<tr height="20">
      <td class="fontkink1" ><b>Basic amount:</b></td>
      <td  class="fontkink"><?php echo $row['basicfare'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Final Amount:</b></td>
      <td  class="fontkink">will be decided by the arrived person</td>
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Service Date:</b></td>
      <td  class="fontkink"><input type="date" id="date" name="date"/></td>
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Service time:</b></td>
      <td  class="fontkink"><input type="time" id="time" name="time"/></td>
    </tr>   
    <tr>
      <td colspan="2"><hr width="65%;" style="margin-left: 0px;"></td>
    </tr>
        <tr>
      <td colspan="2"><p class="text-center ms-5">*Charges exclude material costs</p></td>
    </tr>
    <tr>
      <td colspan="2"><br></td>
    </tr>
    <tr height="20">
      <td  class="fontkink1" colspan="2"><a class="btn btn-danger rounded mx-3" href="home.php">cancel</a><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Proceed
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Address</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="form-floating mt-3">
    <input type="text" placeholder="Enter Name" name="name" class="form-control" id="name" required>
    <label for="name"><b>Name</b></label>
    </div>
	<div class="form-floating mt-3">
		<input type="number" placeholder="Enter E-mail" name="mobile" class="form-control" id="mobile" required>
    <label for="mobile"><b>Mobile</b></label>
  </div>
  <div class="form-floating mt-3">
    <input type="text" placeholder="Enter Name" name="country" class="form-control" id="name" required>
    <label for="country"><b>Country</b></label>
    </div>
	<div class="form-floating mt-3">
		<input type="number" placeholder="Enter E-mail" name="pin" class="form-control" id="pin" required>
    <label for="pin"><b>Pin Code</b></label>
  </div>
  <div class="form-floating mt-3 mb-3">
    <textarea class="form-control" placeholder="Enter message" name="address" id="message" rows="3"></textarea>
    <label for="address"><b>Address</b></label>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-success rounded mx-3" type="submit" name="book_service">Book</button>
      </div>
    </div>
  </div>
</div></td>
    </tr>
  </form>
</table>
<?php } }?>
</div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
<?php } ?>