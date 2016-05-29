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
		<title>PAYMENTS PAGE</title>
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
					<a href="payments.php" class="current">PAYMENTS</a>	
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

	<section>
		<div id="nav" class="personal" align="vertical">
			<link rel="stylesheet" type="text/css" href="profile_main.css">
			<link rel="stylesheet" type="text/css" href="customer.css">
			<li><a href="payments.php">Transfers</a></li>
			<li><a href="online_pay.php">Online Payments</a></li>
			<li><a href="bills.php" class="current">Bills</a></li>	
		</div>
	</section>

		<link rel="stylesheet" type="text/css" href="bills.css">
		<div id="ol">

				<ol>
				<li><a href="http://portal2.bsnl.in/myportal/">pay telephone</a></li>
				<li><a href="https://www.billdesk.com/APCPDCL/apcpdcl.htm">pay electricity</a></li>
				<li><a href="https://vmc.gov.in/onlinegas/payonline.aspx">pay gas bill</a></li>
				</ol>
		</div>

		</div>	
	</body>
</html>