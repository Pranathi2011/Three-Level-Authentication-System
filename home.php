<?php 
session_start();
include('connect.php');
if(strlen($_SESSION['uname'])==0){
  header('location:login.php');
}
else{
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
<style>
body{
    margin: 0px;
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  float: left;
  text-align: center;
  background-color: red;
  color: white;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

h2{
  color: red;
  font-size: 80px;
  text-align: center;
}
h4{
  color: white;
}
</style>
</head>
<body style="background-color: #f5f5f5;">
  <?php include('header.php');?>
<div class="container text-center">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-1 mx-auto">
<?php
        $query = "SELECT * FROM service ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
<div class="col mt-5 mx-auto">
<a href="service.php?action=add&id=<?php echo $row['id']; ?>" style="text-decoration: none;"><div class="card mx-auto me-3 ms-3" style="border-radius: 5px;border: 2px solid gray;">
  <legend><?php echo $row["name"]; ?></legend>
  <img src="<?php echo $row["image1"]; ?>" alt="login" class="img-fluid rounded" style="min-height:220px;max-height:220px;max-width:275px;min-width:275px;"> 
</div></a>
</div>
<?php }}?>
</div>
</div>
<?php include('footer.php');?>
</body>
</html> 
<?php } ?>