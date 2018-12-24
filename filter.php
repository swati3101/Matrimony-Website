<?php
session_start();

$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if($conn)
{
}
else
	die("Connection failed: " . mysqli_connect_error());

$username = $_SESSION["USER"];
$gender = $_SESSION["GEN"];
?>

<html>

<head>
<title>select</title>
<style>
.segment{
	background:rgba(0,0,0,0.5);
	width:100%;
	border-radius:10px;
	padding:5px;
	text-align:center;
	
	
}
</style>
<script>

function age()
{
	//var checkBox = document.getElementById("age");
	var str=" ";
	str=str+"<input type='text' name='age'>";
	document.getElementById("age").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function religion()
{	
	//var checkBox = document.getElementById("reli");
	var str=" ";
	str=str+"<input type='text' name='rel'>";
	document.getElementById("rel").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function caste()
{	
	//var checkBox = document.getElementById("cas");
	var str=" ";
	str=str+"<input type='text' name='caste'>";
	document.getElementById("caste").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
function mar()
{
	//var checkBox = document.getElementById("mart");
	var str=" ";
	str=str+"<input type='text' name='marital'>";
	document.getElementById("mar").innerHTML=str;
	/*if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }*/

}
</script>

</head>

<body style="font-size:25px;color:white;">
<div class="segment">
Select the filter criteria:
<form method="post" action="applyfilter.php">
<table style="font-size:25px;color:white;">
<tr>
<td><input type='checkbox' name='a[]' value='nage' onchange="age()" > Age &emsp;</td><td><b id="age"></b><br></td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='nrel' onchange ="religion()" > Religion &emsp; </td><td><b id="rel"></b><br></td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='ncaste' onchange ="caste()" > Caste &emsp;</td><td> <b id="caste"></b><br> </td>
</tr>
<tr>
<td><input type='checkbox' name='a[]' value='nmar' onchange ="mar()"> Marital Status &emsp; </td><td> <b id="mar"></b> <br> </td>
</tr>
<tr>
<td><!--<button type="submit" formaction="homepage.html">Submit</button>--><input style="font-size:15px;font-weight:bold;background-color:black;color:orange;padding:5px 3px;width:100px;height:40px;border-radius:10px;" type="submit" name="submit" value="APPLY"></td>
</tr>
</table>
</form>
</div>
</body>
</html>