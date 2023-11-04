<?php
$name=$_GET['pname'];
$fdate=$_GET['fdate'];
$tdate=$_GET['tdate'];
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
	$op=$row["op_bal"];
	$BAL=$row["balance"];
	$sq="select * from purchases where (pur_date>='$fdate' and pur_date<='$tdate')and main_id='$tid' ORDER BY day(pur_date)ASC, month(pur_date)ASC ,year(pur_date)ASC";
	$c=mysqli_query($con,$sq);
	//paid
	$s="select * from paid where (paid_date>='$fdate' and paid_date<='$tdate')and main_id='$tid' ORDER BY day(paid_date)ASC, month(paid_date)ASC ,year(paid_date)ASC";
	$pos=mysqli_query($con,$s);
}
?>
<html>
<head>
<title>date wise</title>
<style>
table
{
	width:100%;
	height:70%;
	border:3px inset black;
}
th
{
	font-size:2em;
	background-color:lightblue;
	color:black;
}
td
{
	font-size:1.5em;
	text-align:center;
	color:lightblue;
}
.pur
{

	width:100%;
}
.paid
{

	width:100%;
}
.l
{
	width:11%;
	margin-left:88%;
	position:fixed;
}
.b
{
	padding:8px;
	background-color:#bfbfbf;
	font-weight:900;
	font-size:1em;
}
</style>
</head>
<body bgcolor="#1e475e">
<div>
<table border=5px>
<tr style="padding-top:1px;">
 <td><div class="pur">
  <?php
echo "OPENING BALANCE=".$op;
?>
  <table border=1px">
   <tr>
   <th>DATE</th>
   <th>PURCHASE AMOUNT</th>
   </tr>
   
     <?php
	while($ro=mysqli_fetch_array($c))
	{
		
		echo "<tr>
		<td>$ro[pur_date]</td>
		<td>$ro[pur_amo]</td>
		</tr>";
		
	}
	?>
	 
  </table>
 </div></td>
 <td ><div class="paid">
  <table border=1px>
   <tr>
   <th>DATE</th>
   <th>PAID AMOUNT</th>
   </tr>
     
	 <?php
	while($po=mysqli_fetch_array($pos))
	{
		
		echo "<tr>
		<td>$po[paid_date]</td>
		<td>$po[paid_amo]</td>
		</tr>";
	}
	?>
	 
  </table>
 </div></td>
 </table>
</div>
<br><br><br>
    <div class="l">
    <a href="index.html"><input type="button"value="Home"class="b"></a>
    </div>
</body>
</html>