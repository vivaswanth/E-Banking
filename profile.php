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

$data = mysqli_query($conn, "SELECT * from profile where username = '$user'") or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $data"); 
	
	while($row = mysqli_fetch_array($data))
	{
		$name  		= $row['name'];
		$fname 		= $row['father_name'];
		$sex 		= $row['sex'];
		$dob 		= $row['birth_date'];
		$mob 		= $row['mobile_number'];
		$email 		= $row['email'];
		$address 	= $row['address'];
		$occu 		= $row['occupation'];
		$office 	= $row['office'];
 	}

 
?>

<!Doctype>
<html>
	<head>
		<title>PROFILE PAGE</title>
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
		
	<section>
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
	</section>

	<section>
		<link rel="stylesheet" type="text/css" href="profile_main.css">
		<link rel="stylesheet" type="text/css" href="customer.css">
		<div id="nav" class="personal" align="vertical">
		
			<li><a href="profile.php" class="current">Personal-info</a></li>
			<li><a href="identity.php">Identity-info</a></li>
		
		</div>
	</section>
		

	<section>
		<link rel="stylesheet" type="text/css" href="profile_main.css">
		<div id="page" >

			<ul id="profiling">
			<li>Name of the account holder : <?php echo $name; ?><br></li>
			<li>Father's name  			   : <?php echo $fname; ?><br></li>
			<li>Date of Birth 			   : <?php echo $dob; ?><br></li>
			<li>Sex						   : <?php echo $sex; ?><br></li>
			<li>Email id                   : <?php echo $email; ?><br></li>
			<li>Mobile Number			   : <?php echo $mob; ?><br></li>
			<li>Occupation				   : <?php echo $occu; ?><br></li>
			<li>Address 				   : <?php echo $address; ?><br></li>
			</ul>
						
		</div>
	</section>
		
		</div>
	</body>
</html>

