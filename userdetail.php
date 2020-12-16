<?php
	if(isset($_POST["submit"])){
		$name = $_POST["txtname"];
		$username = $_POST["txtusername"];
		$email = $_POST["txtemail"];	
	
		$con=mysqli_connect("localhost","root","","login");
		$sql="INSERT INTO `userdetails`(`name`, `username`, `email`) VALUES ('".$name."','".$username."','".$email."')";
		mysqli_query($con,$sql);
		header('Location:Home.html');
			
	}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Details</title>
<link rel="stylesheet" href="userdetail.css" />
<script language="javascript" type="text/javascript">
function validname(){
		var name=document.getElementById("name").value;
		if(Name=="")
		{
			document.getElementById("errname").innerHTML="*Enter your Name";
			document.getElementById("errname").style.color="Red";
			document.getElementById("name").style.backgroundColor="#6FF";
			return false;
		}
		document.getElementById("errname").innerHTML="";
		document.getElementById("name").style.backgroundColor="#FFF";
		return true;
	}
	
function validusername(){
		var username=document.getElementById("username").value;
		if(Name=="")
		{
			document.getElementById("errusername").innerHTML="*Enter your Name";
			document.getElementById("errusername").style.color="Red";
			document.getElementById("username").style.backgroundColor="#6FF";
			return false;
		}
		document.getElementById("errusername").innerHTML="";
		document.getElementById("username").style.backgroundColor="#FFF";
		return true;
	}

	function validemail(){
		var email=document.getElementById("email").value;
		if(Email=="")
		{
			document.getElementById("erremail").innerHTML="*Enter your Email";
			document.getElementById("erremail").style.color="Red";
			document.getElementById("email").style.backgroundColor="#6FF";
			return false;
		}
		document.getElementById("erremail").innerHTML="";
		document.getElementById("email").style.backgroundColor="#FFF";
		return true;
	}

function validate(){
		if(validname() && validusername() && validemail())
		{		
			alert("data uploded successfully");
			
		}
		else
		{
			event.preventDefault();
		}
	}


</script>
</head>

<body>
	<h1 align="center">User Details</h1>
	<form method="post" enctype="multipart/form-data">
	<table align="center" border="0">
		<tr align="center" height="75">
			<td><b>name:</b></td>
            <td><input type="text" name="txtname" id="txtname" onkeyup="validname()" /><div class="err" id="errname"></div></td>
            
         </tr>
         <tr align="center" height="75">
         	<td><b>username:</b></td><td><input type="text" name="txtusername" id="txtusername" onkeyup="validusername()"/>
            <div class="err" id="errusername"></div></td>
         </tr>
         <tr align="center" height="75">
         		<td><b>email: </b></td><td> <input type="text" name="txtemail" id="txtemail"  onkeyup="validemail()"/><div class="err" id="erremail"></div></td>
         </tr>
         <tr align="center" height="75">
         		<td></td><td><input type="submit" name="submit" id="submit" value="Submit" onclick="validate()" /></td>
         </tr>
         </table>
         </form>



</body>
</html>