<?php 
session_start();
include ('connect.php');
if(strlen($_SESSION['id'])==0){
	header('location:index.php');
}
else{
	if(isset($_POST["send_message"]))
	{
		$name=mysqli_real_escape_string($connect, $_POST['name']);
		$email=mysqli_real_escape_string($connect, $_POST['email']);
		$message=mysqli_real_escape_string($connect, $_POST['message']);
		$sql = "INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$message')";
        if(mysqli_query($connect, $sql)){
        	echo "Records inserted successfully.";
        } 
        else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
    }
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homyneeds</title>
	  <link rel="icon"  href="logo.png" type="image/x-icon">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript">
function validate()
{
mail(document.getElementById("email").value);
}
  function mail(email)
{
atp=email.indexOf("@");
dotp=email.lastIndexOf(".");
if (atp<1 || dotp<atp+2 || dotp+2>=email.length)
alert("Enter a valid E-mail ID");
}
</script>
<style type="text/css">
	@media only screen and (max-width: 440px) {
   .location{
   	width: 330px;
   	height: 330px;
  }
  @media only screen and (min-width: 450px) {
   .location{
   	width: 450px;
   	height: 450px;
  }
}
</style>
</head>
<body style="background-color: #f5f5f5;">
<?php include('header.php');?>
<div class="container">
<h1 class="pt-3 pb-3" style="text-align:center">Contact</h1>
<div class="row">
<div class="col-md-6"><h1><strong>Address Location</strong></h1><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.001696423075!2d79.15722781490565!3d12.971742990855772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad47a1c31ff897%3A0x25b8753e051621bd!2sTechnology%20Tower%20-%20TT!5e0!3m2!1sen!2sin!4v1599633865465!5m2!1sen!2sin" class="location" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
<div class="info col-md-6">
	<form method="post">
	<div class="form-floating mt-3 col-md-5">
    <input type="text" placeholder="Enter Name" name="name" class="form-control" id="name" required>
    <label for="name"><b>Name</b></label>
    </div>
	<div class="form-floating mt-3">
		<input type="text" placeholder="Enter E-mail" name="email" class="form-control" id="email" required>
    <label for="email"><b>E-mail</b></label>
  </div>
  <div class="form-floating mt-3 mb-3">
    <textarea class="form-control" placeholder="Enter message" name="message" id="message" rows="3"></textarea>
    <label for="message"><b>Message</b></label>
  </div>
	<button onclick="validate()" name="send_message" class="btn btn-primary" type="submit">Send Message</button>
	</form>
	<h3 class="mt-3 mb-2">Information</h3>
	<h2>Contact Us</h2>
	<p>As you might expect of a company that began as a high-end interiors contractor, we pay strict attention.</p>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>
<?php }?>