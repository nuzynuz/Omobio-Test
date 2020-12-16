<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Details</title>
<link rel="stylesheet" href="userdetailsview.css" type="text/css" />
</head>

<body>
<h1>User Details</h1>
<?php
	$con=mysqli_connect("localhost","root","","login");
		$sql="SELECT * FROM `userdetails`";
		if($data=mysqli_query($con,$sql)){
			echo "<table border='1' width='1350'>";
			while($row=mysqli_fetch_assoc($data)){
				echo "<tr><td>id :".$row["id"]."</td>";
				echo "<td>name :".$row["name"]."</td>";
				echo "<td>usename :".$row["username"]."</td>";
				echo "<td>email:".$row["email"]."</td>";
				echo "</tr>";
				}
				echo "</table>";
				
			}
?>
</body>
</html>