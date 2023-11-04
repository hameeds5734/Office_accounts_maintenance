<html>
<head>
<title>paid</title>
<style>
.mid
{
	margin-top:3%;
	margin-left:13%;
	background-color:#bfbfbf;
	width:68%;
	padding:45px;
	box-shadow:2px 3px 5px 3px;
	border-radius:5px;
}
table
{
	align:center;
}
table tr td
{
	padding:10px;
	font-size:3em;

}
input
{
	font-size:0.7em;
	width:50%;
	padding:5px;
	border-radius:2px;
	box-sizing:border-box;
	border:2px solid black;
	transition:width 0.8s ease-in-out;
}
input:focus
{
	border:2px solid #555;
	width:100%;
}
.in
{
	display:flex;
	height:50px;
	font-size:2em;
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
<body bgcolor="#33343d">
<form action="paid_prc.php" method="post">
<marquee><h2><font color="#bfbfbf">Paid Entry</font></h2></marquee>
<div class="mid">
  <table>
   <tr>
     <td>Party Name </td>
	 <td><input type="text"name="pname"></td>
   </tr>
   <tr>
     <td> date  </td>
	 <td><input type="date"name="pdate"></td>
   </tr>
   <tr>
     <td>paid amount   </td>
	 <td><input type="number"name="pdamo"></td>
   </tr>
  </table>
     <div class="in"> 
      <input type="submit"value="submit">
	  <input type="reset" value="reset">
     </div>
</div>
<br><br>
    <div class="l">
    <a href="index.html"><input type="button"value="Home"class="b"></a>
    </div>  
</form>
</body>
</html>