<?php
include_once 'dbconnect.php';
session_start();

echo $_SESSION['user'];

$conn = mysqli_connect("localhost","root","","e-banking");

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
 }
if (isset($_POST['pay']))
{
	$aid = mysqli_escape_string($conn, $_POST['aid']);
	$pid = mysqli_escape_string($conn, $_POST['pid']);
	$link = mysqli_escape_string($conn, $_POST['link']);
	$type = mysqli_escape_string($conn, $_POST['type']);

	$sql = "INSERT INTO payments(account_id, payment_id, payment_name, type) VALUES ('$aid','$pid','$link','$type');";

	if(mysqli_query ($conn,$sql))
 {
  	?>
        <script>alert('successfully paid');</script>
        <?php
 }
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
			<li><a href="online_pay.php" class="current">Online Payments</a></li>
			<li><a href="bills.php">Bills</a></li>	
		</div>
	</section>

	<section>
		<link rel="stylesheet" type="text/css" href="profile_main.css">
		<div id="page" >

			<ul id="profiling">
			
			<li style="width: 800px; height: 60px;">To make a new online payment, enter the link or id of that object below and enter your transaction passcode below along with your user name   : <br></li>
			
			<form method="post">
			<div class="payee">
				<link rel="stylesheet" type="text/css" href="payment.css">
				<input type="text" placeholder="your account id here.." name="aid"><br>
				<input type="text" placeholder="Your payment id here.." name="pid"><br>
				<input type="text" placeholder="Your link here..." name="link"><br>
				<input type="text" placeholder="payment type here..." name="type"><br>
				<input type="password" placeholder="your trans.passcode here" name="passcode_2"><br>
				<input type="submit" placeholder="pay" value="pay" name="pay"></input>	
			</div>
			</form>
			
			</ul>
						
		</div>
	</section>

		</div>	
	</body>
</html>