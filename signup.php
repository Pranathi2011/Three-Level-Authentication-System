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
<link rel="stylesheet" type="text/css" href="signin.css">
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
</head>
<body>
  <div class="container">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
    
<form  method="post">
  <div class="card" style="width:25rem;">
  <?php if(strlen($_SESSION['error'])!=0){?>
    <div class="alert alert-danger d-flex alert-dismissible" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/>
    <div>
    <?php echo $_SESSION['error']; ?>
    </div></svg>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php }?>
  <div class="card-body">
    <div class="text-center">
    </div>
    <h1 class="card-title" align="center">Signup</h1>
    <div class="form-floating mt-3">
    <input type="text" placeholder="Enter username" name="username" class="form-control" id="username" required>
    <label for="username"><b>Username</b></label>
    </div>
    <div class="form-floating mt-3">
    <input type="text" placeholder="Enter E-mail" name="email" class="form-control" id="email" required>
    <label for="email"><b>E-mail</b></label>
    </div>
    <div class="form-floating mt-4 mb-3">
    <input type="password" placeholder="Enter Password" name="password_1" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
    <label for="password_1"><b>Password</b></label>
    </div>
    <div class="mb-3">
    <button type="submit" onclick="validate()" class="w-100 btn btn-lg btn-primary" name="reg_user">Sign up</button>
    </div>
  <div>
    <a href="index.php"><button type="button" class="btn btn-danger">Cancel</button></a>
  </div>
  <div class="mt-2">
  <span>If existing user<a href="login.php" style="text-decoration: none;"> click here?</a></span>
  </div>
</div>
</form>
</div>
<?php include('footer.php') ?>
</body>
</html>