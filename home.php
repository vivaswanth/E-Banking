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
					<a href="home.php" class="current">HOME</a>	
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
		
			<li><a href="home.php" class="current">Home</a></li>
			<li><a href="whats-new.php">Whats new?</a></li>
		
		</div>
	
		<div id="page">
			<li style="margin-top: 30px;">
				Hello <?php echo $_SESSION['user']?> ...!
			</li>
			<br>
			<li>
				we at MIT banking give you a very secure way of organising your accounts.
				All the latest updates will be posted on the whats-new page at the left.
				Make sure you change your passcode if it remains same for 180 days.
			</li>
			<li style="margin-left: 600px; margin-top: 70px;"> - MANAGER</li>
		</div>

	</div>	

	</body>
</html>

