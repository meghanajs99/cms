<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<title>ViewComplaints</title>
<link rel="icon" type="image/ico" href="logo.jpg">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<ul>
  <li><a href="index.php">Home</a></li>
  <li style="float:right"><form action="logout.php" method="post">
    <input class="navinput" type="submit" name="Logout" value="logout">
</form></li>
<li style="float:right"><form action="viewMy.php" method="post">
    <input class="navinput" type="submit" name="view" value="My Complaints">
</form></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Contact</a>
    <div class="dropdown-content">
     <a>Mr.S.Joshua Johnson</a><a>Asst.Professor</a><a>Cse Dept</a><a>joshua.cse@anits.edu.in</a><a>9573382650</a>
    </div>
</li>
</ul>
<?php
session_start();
$con = mysqli_connect("localhost","root","root","complaintdatabase");
if (mysqli_connect_errno())
 {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
   $id=$_SESSION['uid'];
   $desc=$_POST['message'];
	$query = "INSERT INTO feedbacks VALUES ('$id','$desc');";
    $mysqli_result = mysqli_query($con,$query);
	?>
	<br><br><br><h1 align="center">THANK YOU!</h1>
  <div align="center">
	<input name="Done" class="buttonSave" type="button" onclick="window.location.replace('http://localhost/cms/complaintstatus.php')" value="Done" 
				id="Done" ></div>

  </body>
</html>