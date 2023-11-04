<html>
<head>
<title>party add</title>
<style>
.mid
{
	margin-top:2%;
	margin-left:13%;
	background-color:#a7bd66;
	width:68%;
	padding:45px;
	box-shadow:3px 2px 5px 3px;
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
	background-color:#a7bd66;
	font-weight:900;
	font-size:1em;
}
</style>
</head>
<body bgcolor="#475e02">
<form action="party_prc.php" method="post">
<marquee><h2><font color="#a7bd66">PARTY ADD</font></h2></marquee>
<div class="mid">
  <table>
   <tr>
     <td>Party Name </td>
	 <td><input type="text"name="pname"></td>
   </tr>
   <tr>
     <td>Address    </td>
	 <td><input type="text"name="padd"></td>
   </tr>
   <tr>
     <td>phone.No   </td>
	 <td><input type="number"name="phn"></td>
   </tr>
   <tr>
     <td>Balance    </td>
	 <td><input type="number"name="pbal"></td>
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