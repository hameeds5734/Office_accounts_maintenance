<?php
$name=$_REQUEST['pname'];
$date=$_REQUEST['rdate'];
$bill=$_REQUEST['bno'];
$pamo=$_REQUEST['pamo'];
$con=mysqli_connect("localhost","root","","nila");
$sql="select * from main where name='$name'";
$ch=mysqli_query($con,$sql);
if(mysqli_num_rows($ch)<=0)
{
	echo"<script> alert('NO ACCOUNT'); location='party.php';</script>";
}
else
{
	$row=mysqli_fetch_array($ch);
	$tid=$row["id"];
	$sq="insert into purchases(main_id,name,bill_no,pur_date,pur_amo)values($tid,'$name','$bill','$date',$pamo)";
    mysqli_query($con,$sq);
	$s="update main set balance=balance+$pamo where id=$tid";
	mysqli_query($con,$s);
	echo"<script> alert('successfully Added'); location='recive.php';</script>";
}
?>