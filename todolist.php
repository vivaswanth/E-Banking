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

if(isset($_POST['submit']))
{
 $username= mysqli_real_escape_string($conn,$_POST['username']);
 $sno = mysqli_real_escape_string($conn,$_POST['sno']);
 $priority = mysqli_real_escape_string($conn,$_POST['priority']);
 $todo = mysqli_real_escape_string($conn,$_POST['todo']);
 $dead = mysqli_real_escape_string($conn,$_POST['dt']);
 
 $put="INSERT INTO todolist (username,sno,priority,todo,deadline) VALUES ('$username','$sno','$priority','$todo','$dead')";

 if(mysqli_query ($conn,"INSERT INTO todolist (username,sno,priority,todo,deadline) VALUES ('$username','$sno','$priority','$todo','$dead')"))
 {
  	?>
        <script> alert('successfully entered ')</script>
        <?php
 }
 else
	{
		die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $put"); 
	}

}
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
		
			<li><a href="todolist.php" class="current">make-list</a></li>
			<li><a href="viewlist.php">view-list</a></li>
		
		</div>


		<div class="change">
			<link rel="stylesheet" type="text/css" href="todolist.css">

			<form method="post">
			<ol>
			<li><input type="text" name="username" placeholder="username"></input></li>
			<li><input type="number" name="sno" placeholder ="sno"></input></li>
			<li><input type="number" name="priority" placeholder ="your priority"></input></li>
			<li><input type="text" name="todo" placeholder ="your matter"></input></li>
			<li><input type="text" name="dt" placeholder ="deadline"></input></li>
			<li><input type="submit" name="submit" value="enter"></input></li>
			</ol>
			</form>
		</div>
	



	</div>	

	</body>
</html>

