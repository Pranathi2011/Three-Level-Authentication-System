<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Homyneeds</title>
    <link rel="icon"  href="logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="login.css">

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
<style>
form i {
    margin-left: -30px;
    cursor: pointer;
}
</style>
</head>
<body>
  <div class="container mt-5">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
    
	<div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-3 g-4">
  <div class="col mx-auto">
  <?php if(strlen($_SESSION['username'])!=0){?>
    <div class="alert alert-success d-flex alert-dismissible" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/>
    <div>
    <?php echo "Hi ".$_SESSION["username"]." ! Your account created sucessfully"; ?>
    </div></svg>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
    <?php if(strlen($_SESSION['error'])!=0){?>
    <div class="alert alert-danger d-flex alert-dismissible" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <div>
    <?php echo $_SESSION['error']; ?>
    </div></svg>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
  <div class="card">
  <form  method="post">
  <div class="card-body">
    <h1 class="card-title" align="center">Login</h1>
    <div class="form-floating mt-3">
    <input type="text" placeholder="Enter username" name="name" class="form-control" id="name" required>
    <label for="name"><b>Name</b></label>
    </div>
    <div class="form-floating mt-4 mb-3">
    <input type="password" placeholder="Enter Password" name="password" id="password" class="form-control"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <label for="password"><b>Password</b></label>
    <span class="position-absolute top-50 start-100 translate-middle"><i class="bi bi-eye-slash" id="togglePassword"></i></span>
    </div>
    <div class="mb-3">
    <button type="submit" onclick="validate()" class="w-100 btn btn-lg btn-primary" name="login_user">Login</button>
    </div>
  <div style="background-color:#f1f1f1">
    <a href="index.php"><button type="button" class="btn btn-danger"> Cancel</button></a>
    <span style="align-items: right;" class="psw">Forgot <a href="fpassword.php">password?</a></span>
  </div>
  <span>If new user<a href="signup.php" style="text-decoration: none;">click here?</a></span>
</div>
</form>
</div>
</div>
</div>
</div>
<?php include('footer.php') ?>
<script>
const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');
 togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});
</script>
</body>
</html>