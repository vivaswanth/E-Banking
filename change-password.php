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
if(isset($_POST['commit']))
{
	$passwordc = md5(mysqli_real_escape_string($conn,$_POST['password']));

	$put="UPDATE login SET password = '$passwordc' WHERE username = '$user'";

	if(mysqli_query($conn, "UPDATE login SET password = '$passwordc' WHERE username = '$user'"))
	{
		?>
        <script>alert('successfully changed the password ');</script>
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
		<title>PASSWORD PAGE</title>
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
					<a href="settings.php" class="current">SETTINGS</a>	
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
				<link rel="stylesheet" type="text/css" href="customer.css">
				<li><a href="settings.php">Edit profile</a></li>
				<li><a href="change-password.php" class="current">Change password</a></li>
			
			</div>

			
		<div class="change">
			<link rel="stylesheet" type="text/css" href="password.css">

			<form method="post">
      			<ol>	
      			<li><label for="Password">Your old password</label>
      				<p><input type="text" name="login" value="" placeholder="Old Password"></p>
        		</li>

        		<li><label for="Password">Your new Password</label> 
        			<p><input type="password" name="password" value="" placeholder="New Password"></p>
        		</li>

        		<li><label for="Password_new">Re-enter new Password</label> 
        			<p><input type="password" name="password_new" value="" placeholder="New Password"></p>
        		</li>
        		
  		      	<li><p class="submit"><input type="submit" name="commit" value="change"></p></li>

  		      	</ol>

  		     </form> 	
        </div>
        	
		</div>		
	</body>
</html>