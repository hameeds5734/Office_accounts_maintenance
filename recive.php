<html>
<head>
<title>recived</title>
<style>
.mid
{
	margin-top:3%;
	margin-left:13%;
	background-color:#e0a8d1;
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
	background-color:#e0a8d1;
	font-weight:900;
	font-size:1em;
}
</style>
</head>
<body bgcolor="#3d1d35">
<form action="recive_prc.php">
<marquee><h2><font color="#e0a8d1">Purchase Entry</font></h2></marquee>
<div class="mid">
  <table>
   <tr>
     <td>Party Name </td>
	 <td><input type="text"name="pname"></td>
   </tr>
   <tr>
     <td>Date </td>
	 <td><input type="date"name="rdate"></td>
   </tr>
   <tr>
     <td>Bill.No   </td>
	 <td><input type="text"name="bno"></td>
   </tr>
   <tr>
     <td>purchase amount   </td>
	 <td><input type="number"name="pamo"></td>
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