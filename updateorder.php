<?php 
include('connect.php');
$id=intval($_GET['id']);
if(isset($_POST['submit2'])){
$status=$_POST['status'];
$tech=$_POST['tech'];
$sql=mysqli_query($connect,"update booking set servicestatus='$status',technician='$tech' where id='$id'");
echo "<script>alert('Order updated sucessfully...');</script>";
}
if(isset($_POST['Submit3']))
{
	header('location:orderdetails.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Homy needs</title>
    <link rel="icon"  href="homy.png" type="image/x-icon">
</head>
<body>
<div style="margin-left:50px;">
 <form method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Update Bookings !</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Booking Id:</b></td>
      <td  class="fontkink"><?php echo $id;?></td>
    </tr>
    <?php 
$ret = mysqli_query($connect,"SELECT * FROM booking WHERE id='$id'");
     while($row=mysqli_fetch_array($ret))
      {
     ?>
		
    
    
      <tr height="20">
      <td class="fontkink1" ><b>At Date:</b></td>
      <td  class="fontkink"><?php echo $row['bookingdate'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Status:</b></td>
      <td  class="fontkink"><?php echo $row['servicestatus'];?></td>
    </tr>   
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
   <?php } ?>
   <?php 
$st='Delivered';
   $rt = mysqli_query($connect,"SELECT * FROM booking WHERE id='$id'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['servicestatus'];
   }
     if($st==$currrentSt)
     { ?>
   <tr><td colspan="2"><b>
      Product Delivered </b></td>
   <?php }else  {
    $sql="select * from admin where role!='admin'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
	if($count>0)
	{
      ?>
   
    <tr height="50">
      <td class="fontkink1">Status: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required>
          <option value="">Select Status</option>
                 <option value="Processing">Processing</option>
                  <option value="Confirmed">Confirmed</option>
                  <option value="Person out for service">Person out for service</option>
                  <option value="Currently unavailable">Currently unavailable</option>
        </select>
        </span></td>
    </tr>
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>
    <tr>
 <td>Assign technician:</td>
 <td><select name="tech" class="fontkink">
  <option value="">Select Status</option>
  <option value="<?php echo $row['name'] ?>"><?php echo $row['name']."-".$row['role'] ?></option>
</select></td>
 </tr>
    <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;   
      <input name="Submit3" type="submit" class="txtbox4" value="Go Back" onClick="return f2();" style="cursor: pointer;"  /></td>
    <br></tr>
<?php }}?>
 
</table>
 </form>
</div>
</body>
</html>