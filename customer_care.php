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
		<title>E_SERVICES PAGE</title>
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
		
		<div>

		<link rel="stylesheet" type="text/css" href="customer.css">
		
		<div class="sidebar">

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
					<a href="todolist.php">TO-DO LIST</a>	
					</li>
					<li>
					<a href="e_services.php">E-SERVICES</a>	
					</li>
					<li>
					<a href="customer_care.php" class="current">CUSTOMER CARE</a>	
					</li>
					<li>
					<a href="feedback.php">FEEDBACK</a>	
					</li>
					<li>
					<a href="logout.php?logout">LOGOUT</a>	
					</li>


				</ul>
		</div>

		<div class="change">
			<link rel="stylesheet" type="text/css" href="infochange.css">
			<form method="post" action="">
			<h3 style="width: 500px; color: white; font-size: 20px;">Mention your problems here...or contact us.</h3>
			<h3 style="width: 500px; color: white; font-size: 20px;">customer care toll free number :-> 000000111111</h3>
			<textarea name="customer-care" rows="10" cols="150"></textarea>
			<p class="submit"><input type="submit" name="commit" value="submit"></p>
		</form>	
		</div>
		
		</div>

	</body>
</html>