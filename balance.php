<?php
$vid=$_GET['vid'];
$eid=$_GET['eid'];
$cid=$_GET['cid'];
//if($vid==-1)
//{
//	$vid='balance';
//}
?>
<html>
<head>
<title>balance</title>
<style>
.main
{
	background-color:#576566;
	width:99%;
	height:99%;
	padding:1%;
	position:fixed;
}
.frst
{
	width:98%;
	height:30%;
	background-color:lightblue;
	border:1px solid lightblue;
	box-shadow:0 0 5px 0;
}
.sec
{
	width:98%;
	height:30%;
	background-color:pink;
	border:1px solid pink;
	display:flex;
	box-shadow:0 0 5px 0;
}
.fl
{
	height:80%;
	width:20%;
	background-color:#94b7d4;
	text-align:center;
	vertical-align:middle;
	line-height:153px;
	margin:20px;
	box-shadow:0 0px 7px 0 ;
	border-radius:2px;
	font-size:2.2em;
	margin-left:10%;
	
}
.thrd
{
	width:98%;
	height:30%;
	background-color:lightgreen;
	border:1px solid lightgreen;
	box-shadow:0 0 5px 0;
}
input[type=text]
{
	font-size:0.7em;
	width:100%;
	padding:5px;
	border-radius:2px;
	box-sizing:border-box;
	border:2px solid black;
}
table tr td
{
	padding:10px;
	font-size:3em;
}
.u
{
	margin-left:21%;
	margin-top:40px;
}
.m
{
	margin-left:9%;
	font-size:3em;
}
input[type=date]
{	
	font-size:0.7em;
	width:25%;
	padding:5px;
	border-radius:2px;
	box-sizing:border-box;
	border:2px solid black;
	box-shadow:0 0 3px 0;
}
.okbt
{
	font-size:0.8em;
	border:2px solid black;
}
.l
{
	width:11%;
	margin-left:88%;
	position:fixed;
}
.c
{
	position:fixed;
	left:46%;
	bottom:0.5%;
	width:100%;
	
}
.b
{
	padding:2px;
	background-color:#627778;
	font-weight:900;
	font-size:1em;
	color:white;
	text-align:center;
}
.d
{
	background-color:#627778;
	color:white;
	padding-bottom:10px;
	font-size:0.6em;
	font-weight:bold;
	
}
.ni
{
	
	font-size:1.3em;
	font-weight:bold;
	color:lightblue;
	padding:0px;
}
</style>
</head>
<body>
<div class="main">
  <div class="frst">
    <div class="u">
	<form action="abal.php"method="post">
	<table>
	<tr>
	  <td>Party Name</td>
	  <td><input type="text" name="pname"></td>
	  <td><input type="submit" value="ok" class="okbt"></td>
    </tr>
	</table>
	</form>
	</div>
	<div class="l">
    <a href="index.html"><input type="button"value="Home"class="b"></a>
  </div> 
  </div>
  <div style="display:flex;">
  <p class=ni style="margin-left:17%;">Balance</p>
  <p class=ni style="margin-left:23%;">Total Purchase</p>
  <p class=ni style="margin-left:22%;">Total Paid</p>
  </div>
  <div class="sec">
       <div class="fl">
	      <?php echo $_GET['vid'];?>
	   </div>
	   <div class="fl">
	      <?php echo $_GET['eid'];?>
	   </div>
	   <div class="fl">
	      <?php echo $cid;?>
	   </div>
  </div>
  <div class="thrd">
     <div class="m">
	 <form action="d_w.php">
	     Party Name:<input type="text" name="pname" style="width:30%"><br>
        From Date : <input type="date" name="fdate">  To Date : <input type="date" name="tdate"><br>
        <div class="c"><input type="submit" value="GO" class="d"style="width:10%;"></div>
	 </form>	
     </div>
  </div>
  
</div>
</body>
</html>