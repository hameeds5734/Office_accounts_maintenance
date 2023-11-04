<?php
$name=$_REQUEST['pname'];
$date=$_REQUEST['pdate'];
$pamo=$_REQUEST['pdamo'];
$con=mysqli_connect("localhost","root","","nila");
$sql="select * from main where name='$name'";
$ch=mysqli_query($con,$sql);
$r=mysqli_fetch_array($ch);
if(mysqli_num_rows($ch)<=0)
{
	echo"<script> alert('NO ACCOUNT'); location='party.php';</script>";
}
else if($r["balance"]<=0)
{
	echo"<script> alert('NO MORE DUES'); location='recive.php';</script>";
}
else
{
	$tid=$r["id"];
	$sq="insert into paid(main_id,name,paid_date,paid_amo)values($tid,'$name','$date',$pamo)";
    mysqli_query($con,$sq);
	$s="update main set balance=balance-$pamo where id=$tid";
	mysqli_query($con,$s);
	echo"<script> alert('successfully paid'); location='paid.php';</script>";
}
?>