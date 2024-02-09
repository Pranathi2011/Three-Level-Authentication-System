<?php
$db = mysqli_connect("localhost", "root", "", "homy");
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$id = mysqli_real_escape_string($db, $_POST['id']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$image = mysqli_real_escape_string($db, $_POST['image']);
		$price=mysqli_real_escape_string($db,$_POST['price']);
$sql = "INSERT INTO service (id, name,image,basicfare) VALUES ('$id','$name', '$image','$price')";
if(mysqli_query($db, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
mysqli_close($db);
?>