<?php
session_start();
if(isset($_POST['submit'])){
    $pattern=$_POST['input1'];
    header("location:logged_in.php?pattern=".$pattern);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Homyneeds</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
.btn {
    border: none;
    color: white;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.Green {background-color: #4CAF50;} /* Green */
.Green:hover {background-color: #46a049;}

.Orange {background-color: #ff9800;} /* Orange */
.Orange:hover {background: #e68a00;}

.Pink {background-color: #FF1493;} /* Pink */
.Pink:hover {background: #0b7dda;}

.Red {background-color: #f44336;} /* Red */ 
.Red:hover {background: #da190b;}

.Purple {background-color: #800080;} /* Purple */
.Purple:hover {background: #0b7dda;}
body {
background:url("images/bgm6.jpg");
background-repeat:repeat-n;
background-size:1400px 900px;
}

</style>
</head>

<body style="background-color: #f5f5f5;">
<br><br>
<?php
$_SESSION['layer6']=$_GET['var']; 
    $value1 = 'g';
	$value2 = 'o';
	$value3 = 'p';
	$value4 = 'r';
?>
<div class="container">
<center class="mt-5">
<h1>Pattern</h1>
<form method ="POST">
		<input type="hidden" id="value1" value="<?php echo $value1; ?>" name="value1">
		<input type="hidden" id="value2" value="<?php echo $value2; ?>" name="value2">
		<input type="hidden" id="value3" value="<?php echo $value3; ?>" name="value3">
		<input type="hidden" id="value4" value="<?php echo $value4; ?>" name="value4">
        <div class="form-floating mt-3 mb-5" style="width:250px;">
    <input type="text" id = "input1" name = "input1" value="" class="form-control" required placeholder = "just enter the colors shown">
    <label for="input1"><b>Select your pattern:</b></label>
    </div>
		<input class = "btn Green mx-2 mt-2" type="button" value="green" name="button" onclick="populateTextareaone()">
		<input class = "btn Orange mx-2 mt-2" type="button" value="Orange" name="button" onclick="populateTextareatwo()"> 
		<input class = "btn Pink mx-2 mt-2" type="button" value="Pink" name="button" onclick="populateTextareathree()">
		<input class = "btn Red mx-2 mt-2" type="button" value="Red" name="button" onclick="populateTextareafour()">
		<br>
		<br>
		<input class = "btn btn-danger" type="button" value="clear" name="button" onclick="clearit()">
		<input class = "btn btn-primary" type="submit" value="submit" name="submit" required >
		

</form>
</center>
</div>
  <script type="text/javascript">
  function clearit(){
	  
  document.getElementById("input1").value = '';
  txt = '';
  
  }
	txt = ''
    function populateTextareaone() {
        txt = txt.concat(document.getElementById('value1').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareatwo() {
        txt = txt.concat(document.getElementById('value2').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareathree() {
        txt = txt.concat(document.getElementById('value3').value);
		document.getElementById('input1').value = txt;

    }
	function populateTextareafour() {
        txt = txt.concat(document.getElementById('value4').value);
		document.getElementById('input1').value = txt;

    }
  </script>


</body>
</html>
