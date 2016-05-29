<?php
session_start();
include_once 'dbconnect.php';

$conn = mysqli_connect("localhost","root","","e-banking");

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
echo "hello ";
echo $_SESSION['user'];

$user = $_SESSION['user'];
 
 $sql = "SELECT * FROM todolist WHERE username = '$user'";

 $result = mysqli_query($conn,$sql) or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $result"); 

   
 
?>

<!Doctype>
<html>
	<head>
		<title>CUSTOMER PAGE</title>
		<link rel="stylesheet" type="text/css" href="customer.css">
		
	</head>

	<body id="back">

	
		<div class="login_1">
		
		<li style="color: white; margin-left:850px; position: absolute; width: 450px; margin-top: 0px;">
		<p>TIME :</p>
		<p id="demo"></p></li>
		<script>document.getElementById("demo").innerHTML = Date();</script>
	
			<h3>WELCOME TO MIT E_BANKING!</h3>
		
		</div>
	
			
		<hr style="margin-top: 100px; width: 1200px;">

	<div class="back2back">

		<link rel="stylesheet" type="text/css" href="customer.css">
		
		<div class="sidebar">
			<link rel="stylesheet" type="text/css" href="customer.css">
		
				<ul>
			
					<li>
					<a href="home.php">HOME</a>	
					</li>
					<li>
					<a href="profile.php">PROFILE</a>	
					</li>
					<li>
					<a href="accounts.php">ACCOUNTS</a>	
					</li>
					<li>
					<a href="settings.php">SETTINGS</a>	
					</li>
					<li>
					<a href="mini_statement.php">HISTORY</a>	
					</li>
					<li>
					<a href="payments.php">PAYMENTS</a>	
					</li>
					<li>
					<a href="todolist.php" class="current">TO-DO LIST</a>	
					</li>
					<li>
					<a href="e_services.php">E-SERVICES</a>	
					</li>
					<li>
					<a href="customer_care.php">CUSTOMER CARE</a>	
					</li>
					<li>
					<a href="feedback.php">FEEDBACK</a>	
					</li>
					<li>
					<a href="logout.php?logout">LOGOUT</a>	
					</li>
	
				</ul>
		</div>


		<div id="nav" class="personal" align="vertical">
		<link rel="stylesheet" type="text/css" href="profile_main.css">
		
			<li><a href="todolist.php">make-list</a></li>
			<li><a href="viewlist.php" class="current">view-list</a></li>
		
		</div>

		<div>
			<li style="color: white; padding: 15px 15px; margin: 50px; font-size: 22px;"><?php

			 $result = mysqli_query($conn,$sql);	
			 while($row = mysqli_fetch_assoc($result)) 
	{
        echo "name: " . $row["username"]. "|| sno: " . $row["sno"]. "|| priority: " . $row["priority"]. "|| todo : " . $row["todo"]. "|| end date : " . $row["deadline"]. "<br>";
    } ?></li>
		</div>
	



	</div>	

	</body>
</html>

