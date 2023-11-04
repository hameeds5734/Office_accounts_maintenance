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
	$sq="select * from purchases where (pur_date>='$fdate' and pur_date<='$tdate')and main_id='$tid' ORDER BY day(pur_date)ASC, month(pur_date)ASC ,year(pur_date)ASC";
	$c=mysqli_query($con,$sq);
	//paid
	$s="select * from paid where (paid_date>='$fdate' and paid_date<='$tdate')and main_id='$tid' ORDER BY day(paid_date)ASC, month(paid_date)ASC ,year(paid_date)ASC";
	$pos=mysqli_query($con,$s);
	?>
	<table border=0px width=100%>
	<tr>
	<td><br><br>
	<table border=2px width=100%>
	<tr>
	<th>date</th>
	<th>purchase amount</th>
	</tr>
	<?php
	while($ro=mysqli_fetch_array($c))
	{
		
		echo "<tr>
		<td>$ro[pur_date]</td>
		<td>$ro[pur_amo]</td>
		</tr>";
		
	}
	echo"</table>";
	?>
	</td>
	<td>
	<table border=2px width=100%>
	<tr>
	<th>date</th>
	<th>paid amount</th>
	</tr>
	<?php
	while($po=mysqli_fetch_array($pos))
	{
		
		echo "<tr>
		<td>$po[paid_date]</td>
		<td>$po[paid_amo]</td>
		</tr>";
	}
	echo"</table>";
	?>
	</td>
	</tr>
	</table>
	<?php
}
?>