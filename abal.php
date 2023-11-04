<?php
	$name=$_POST['pname'];
	$con=mysqli_connect("localhost","root","","nila");
	$sql="select * from main where name='$name'";
    $ch=mysqli_query($con,$sql);
    if(mysqli_num_rows($ch)>0)
    {
	    $row=mysqli_fetch_array($ch);
		$i=$row["balance"];
		//second box
		$sq="select SUM(pur_amo)As totalsum from purchases where main_id='".$row["id"]."'";
	    $pa=mysqli_query($con,$sq);
		$r=mysqli_fetch_assoc($pa);
	    $sum=$r['totalsum'];
		if($sum=="")
		{
			$sum=0;
		}
		//third box
		$s="select SUM(paid_amo)As totalpaid from paid where main_id='".$row["id"]."'";
	    $p=mysqli_query($con,$s);
		$rp=mysqli_fetch_assoc($p);
	    $rsum=$rp['totalpaid'];
		if($rsum=="")
		{
			$rsum=0;
		}
		$qu=array(
		       'vid'=>$i,
			   'eid'=>$sum,
			   'cid'=>$rsum
			     );
	     $qu=http_build_query($qu);
		header("Location:balance.php?$qu");
		
    }
	else
	{
		echo"<script> alert('NO ACCOUNT'); location='balance.php?vid=balance&eid=Total Purchase&cid=Total Paid';</script>";
	}
	
	?>