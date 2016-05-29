<?php
include_once 'dbconnect.php';
session_start();

echo $_SESSION['user'];

$conn = mysqli_connect("localhost","root","","e-banking");

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
 $user = $_SESSION['user'];

 $bal = "SELECT * FROM mini_statement where username = '$user' ";

 $result = mysqli_query($conn,$bal) or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $result");

 $log = mysqli_query($conn,"SELECT * FROM last_login where username = '$user' ");

 $insertion = mysqli_query($conn, "INSERT INTO last_login values ('$user',NOW())");

 while($row = mysqli_fetch_array($log))
 {
 	$name  		= $row['username'];
 	$last  		= $row['log'];
 	
 }

?>

<!Doctype>
<html>
	<head>
		<title>MINI_STATEMENT PAGE</title>
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
					<a href="mini_statement.php" class="current">HISTORY</a>	
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
			<link rel="stylesheet" type="text/css" href="customer.css">
			<li><a href="mini_statement.php" class="current">History</a></li>
			<li><a href="transactions.php">Transactions</a></li>

		</div>
	
	
		<link rel="stylesheet" type="text/css" href="profile_main.css">
		<div id="page" >

			<ul id="profiling">
			
			

			<li style="color: white; padding: 15px 15px; margin: 50px; font-size: 22px; width: 800px;">
    		<?php
		 	$result = mysqli_query($conn,$bal);	
			 while($row = mysqli_fetch_assoc($result)) 
			 {
        	echo  "username : ". $row["username"]."<br> id : ". $row["account_id"]."<br> avail. balance : ". $row["balance"];
		     } ?>
    		</li>

    		<hr style="margin-left: 10px; width: 1200px;">

			
			<li style="margin-top: 10px; position: relative;">All your logs will be here...<br></li>
			
			<li><?php echo $name ?></li>
			<li><?php echo $last ?></li>
						
			</ul>
						
		</div>
			
	
		</div>	
	</body>
</html>