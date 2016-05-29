<?php
include_once 'dbconnect.php';
session_start();

echo $_SESSION['user'];

$conn = mysqli_connect("localhost","root","","e-banking");

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
 }
?>

<!Doctype>
<html>
	<head>
		<title>IDENTITY PAGE</title>
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

		<hr style="margin-top: 100px;">

		<div class="back2back">

		<link rel="stylesheet" type="text/css" href="customer.css">
		
		<div class="sidebar">
				<ul>
			
					<li>
					<a href="home.php">HOME</a>	
					</li>
					<li>
					<a href="profile.php" class="current">PROFILE</a>	
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
					<a href="todolist.php">TO-DO LIST</a>	
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
		<link rel="stylesheet" type="text/css" href="customer.css">
			<li><a href="profile.php">Personal-info</a></li>
			<li><a href="identity.php" class="current">Identity-info</a></li>
		
		</div>
		

			<link rel="stylesheet" type="text/css" href="profile_main.css">	
		<div id="identity">
			<ul>
				<li>S.no</li>
				<li>Identity type</li>
				<li>Identity card number</li>
			</ul>

			<hr>
        </div>
	
	
		</div>	

		
	</body>
</html>

