<?php
$pname=$_REQUEST['pname'];
$padd=$_REQUEST['padd'];
$phn=$_REQUEST['phn'];
$pbal=$_REQUEST['pbal'];
$con=mysqli_connect("localhost","root","","nila");
$sq="select * from main where name='$pname'";
$ch=mysqli_query($con,$sq);
if(mysqli_num_rows($ch)>0)
{
	echo"<script> alert('name already exits'); location='party.php';</script>";
}
else
{
$sql="insert into main(name,address,phone,balance,op_bal)values('$pname','$padd',$phn,$pbal,$pbal)";
mysqli_query($con,$sql);
echo"<script> alert('your record is successfully added');location='party.php';</script>";
}
?>
