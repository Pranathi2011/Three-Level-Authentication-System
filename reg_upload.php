<?php 
session_start();
if(isset($_POST['upload'])){
	extract($_POST);
	$time = date("d-m-Y")."-".date("h-i-s");
 
		// here we set it to the image name
		$i1 = $_FILES['img1']['name'];
		$i1 = $time."-".$i1 ;
		$i2 = $_FILES['img2']['name'];
		$i2 = $time."-".$i2 ;
		$i3 = $_FILES['img3']['name'];
		$i3 = $time."-".$i3 ;
		$i4 = $_FILES['img4']['name'];
		$i4 = $time."-".$i4 ;
		$i5 = $_FILES['img5']['name'];
		$i5 = $time."-".$i5 ;
 
		// upload that image into the directory name: images
		move_uploaded_file($_FILES['img1']['tmp_name'],$i1);
		move_uploaded_file($_FILES['img2']['tmp_name'],$i2);
		move_uploaded_file($_FILES['img3']['tmp_name'],$i3);
		move_uploaded_file($_FILES['img4']['tmp_name'],$i4);
		move_uploaded_file($_FILES['img5']['tmp_name'],$i5);
		$_SESSION['i1']=$i1;
		$_SESSION['i2']=$i2;
		$_SESSION['i3']=$i3;
		$_SESSION['i4']=$i4;
		$_SESSION['i5']=$i5;
		header('Location:registration_img1.php');
}
?>
<!DOCTYPE html>
<html>
<head>

      <title>Register</title>

      <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body style="background-color: #f5f5f5;">


<!-- signup form -->
<div class="signupform">
	<div class="container">
		<div class="agile_info">
			<div class="login_info mt-5">
				<form method="POST" enctype="multipart/form-data">
				<center>
					<div class="mb-3 w-25">
  <label for="formFile" class="form-label">Image-1</label>
  <input class="form-control" type="file" id="formFile" name="img1">
</div>
<div class="mb-3 w-25">
  <label for="formFile" class="form-label">Image-2</label>
  <input class="form-control" type="file" id="formFile" name="img2">
</div>
<div class="w-25 mb-3">
  <label for="formFile" class="form-label">Image-3</label>
  <input class="form-control" type="file" id="formFile" name="img3">
</div>
<div class="w-25 mb-3">
  <label for="formFile" class="form-label">Image-4</label>
  <input class="form-control" type="file" id="formFile" name="img4">
</div>
<div class="w-25 mb-3">
  <label for="formFile" class="form-label">Image-5</label>
  <input class="form-control" type="file" id="formFile" name="img5">
</div>
<div class="col-12">
    <button type="submit" class="btn btn-primary" name="upload">Upload</button>
  </div>
				</center>
			</form>


			</div>
		</div>
	</div>
</div>


</body>
</html>