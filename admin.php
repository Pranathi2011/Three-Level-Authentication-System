<!DOCTYPE html>
<html>
<head>
	<title>Homy needs</title>
    <link rel="icon"  href="homy.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="logsign.css">
</head>
<body>
	<form  method="post" action="authentication.php">
  <div class="log">
  <h1 align="center">ADMIN</h1>
  <div class="container">
    <label for="user"><b>NAME</b></label>
    <input type="text" placeholder="Enter Admin Name" name="user" id="user" required/>
    <br>
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
        <br>
    <button type="submit" class="btn" name="login_user" value="login"/>LOGIN</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</div>
</form>
<footer>
  <div style="float: left; margin: 40px 100px 0px 100px;">
    <h3 style="color: #0B5345"><b>Homy needs</b></h3>
    <p>The customer is at the heart of our<br>unique business model,which includes<br> Design</p>
    <img src="payment.png">
  </div>
  <div style="float: left;margin: 0px 100px 0px 200px">
    <h4 style="color: #0B5345">Opening Time</h4>
    <p>Monday-Friday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;08:00 To 18:00</p><hr width="250px;">
    <p>Saturday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09:00 To 20:00</p><hr width="250px;">
    <p>Sunday:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00 To 20:00</p><hr width="250px;">
  </div>
  <div style="float: left;margin: 30px 0px 0px 250px">
  <h4 style="color: #0B5345">Information</h4>
  <p>Andhra Pradesh</p>
  </div>
</footer>
</body>
</html>