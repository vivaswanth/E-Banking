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
if(isset($_POST['com_mob']))
{
	$number = mysqli_real_escape_string($conn,$_POST['number']);

	$put="UPDATE profile SET mobile_number = '$number' WHERE username = '$user'";

	if(mysqli_query($conn, "UPDATE profile SET mobile_number = '$number' WHERE username = '$user'"))
	{
		?>
        <script>alert('successfully changed the mobile number');</script>
        <?php
	}
	else
	{
		die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $put"); 
	}
}

if(isset($_POST['com_ema']))
{
	$email = mysqli_real_escape_string($conn,$_POST['email']);

	$put="UPDATE profile SET email = '$email' WHERE username = '$user'";

	if(mysqli_query($conn, "UPDATE profile SET email = '$email' WHERE username = '$user'"))
	{
		?>
        <script>alert('successfully changed the email ');</script>
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
		<title>SETTINGS PAGE</title>
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
				<li><a href="settings.php" class="current">Edit profile</a></li>
				<li><a href="change-password.php">Change password</a></li>
			
			</div>
		


		<div class="change">
			<link rel="stylesheet" type="text/css" href="infochange.css">

			<form method="post">
      			<ul id="left">

      			<li><h4>FOR CHANGING MOBILE NUMBER PLEASE ENTER...</h4></li>	      			
      			
      			<li><label for="Mobile">Your old number</label>
      				<p><input type="number" name="number_old" value="" placeholder="Old number"></p>
        		</li><br>

        		<li><label for="Mobile">Your new number</label> 
        			<p><input type="number" name="number" value="" placeholder="New number"></p>
        		</li><br>

        		<li><label for="Mobile">Re-enter new number</label> 
        			<p><input type="number" name="number_re" value="" placeholder="New number"></p>
        		</li><br>
        		
  		      	<li><p class="submit"><input type="submit" name="com_mob" value="change_mob"></p></li>

  		      	</ul>

  		      		
  		      	<ol>

  		      	<li><h4>FOR CHANGING YOUR EMAIL PLEASE ENTER...</h4></li>

      			<li><label for="email">Your old email</label>
      				<p><input type="text" name="email_old" value="" placeholder="Old email"></p>
        		</li><br>

        		<li><label for="email">Your new email</label> 
        			<p><input type="text" name="email" value="" placeholder="New email"></p>
        		</li><br>

        		<li><label for="email">Re-enter new email</label> 
        			<p><input type="text" name="email_re" value="" placeholder="New email"></p>
        		</li><br>
        		
  		      	<li><p class="submit"><input type="submit" name="com_ema" value="change_ema"></p></li>

  		      	</ol>
  		    </form>  	
        </div>	
		
		</div>
		
	</body>
</html>