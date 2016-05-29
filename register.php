<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}
include_once 'dbconnect.php';

$conn = mysqli_connect("localhost","root","","e-banking");

if(isset($_POST['btn-signup']))
{
 $username = mysqli_real_escape_string($conn,$_POST['username']);
 $password = md5(mysqli_real_escape_string($conn,$_POST['password_1']));
 $password_t = md5(mysqli_real_escape_string($conn,$_POST['password_2']));
 $account_id = mysqli_real_escape_string($conn,$_POST['account_id']);
 $cname = mysqli_real_escape_string($conn,$_POST['cname']);
 $sex = mysqli_real_escape_string($conn,$_POST['sex']);
 $fname = mysqli_real_escape_string($conn,$_POST['fname']);
 $dob = mysqli_real_escape_string($conn,$_POST['dob']);
 $mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
 $email = mysqli_real_escape_string($conn,$_POST['email']);
 $address = mysqli_real_escape_string($conn,$_POST['address']);
 $occupation = mysqli_real_escape_string($conn,$_POST['occupation']);
 $office = mysqli_real_escape_string($conn,$_POST['office']);
 
 if(mysqli_query ($conn,"INSERT INTO login (username,password) VALUES('$username','$password')"))
 {
  	?>
        <script>alert('successfully registered ');</script>
        <?php
 }

 if (mysqli_query ($conn,"INSERT INTO profile (account_id,username,name,father_name,sex,birth_date,mobile_number,email,address,occupation,office,password) VALUES('$account_id','$username','$cname','$fname','$sex','$dob','$mobile','$email','$address','$occupation','$office','$password_t')"))
{
	?>	
		<script>alert('now you can use our e-banking services...');</script>
	<?php
}

 if(mysqli_query ($conn,"INSERT INTO customer (username,password,account_id) VALUES('$username','$password', '$account_id')"))
 {
  	?>
        <script></script>
        <?php
 }

 if(mysqli_query ($conn,"INSERT INTO accounts (username, account_id) VALUES('$username','$account_id')"))
 {
  	?>
        <script></script>
        <?php
 }
 if(mysqli_query ($conn,"INSERT INTO mini_statement (username, account_id, balance) VALUES('$username','$account_id','')"))
 {
    ?>
        <script></script>
        <?php
 }
 if(mysqli_query ($conn,"INSERT INTO last_login (username, log) VALUES('$username','')"))
 {
    ?>
        <script></script>
        <?php
 }


 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>

<!DOCTYPE>
<html>
	<head>
		<title>REGISTRATION</title>
		<link rel="stylesheet" type="text/css" href="register.css">
	</head>

	<body>
		<div id="reg1">
				
			<h1>Please provide the following details to register yourself...</h1>	
			
			<form method="post">

			<div id="reg2">
				<ol>	
			 		     <li><label for="cname">YOUR FULL NAME 			:</label> <input id="" name="cname" required="required" type="text" placeholder="your name"/></li>
             	         <li><label for="fname">FATHERS NAME 			:</label> <input id="" name="fname" required="required" type="text" placeholder="father's name"/></li>   
						 <li><label for="sex">SEX						:</label> <input id="" name="sex" required="required" type="text" placeholder="sex"/></li>
						 <li><label for="account id">YOUR ACCOUNT ID 	:</label> <input id="" name="account id" required="required" type="text" placeholder="your account id"/></li>   
             	         <li><label for="email">YOUR EMAIL 				:</label> <input id="" name="email" required="required" type="text" placeholder="****@^^^.com"/></li>   
             	         <li><label for="dob">DATE OF BIRTH 			:</label> <input id="" name="dob" required="required" type="date" placeholder="eg. X8df!90EO"/></li>   
             	         <li><label for="mobile">MOBILE NUMBER 			:</label> <input id="" name="mobile" required="required" type="number" placeholder="9999999999"/></li>   
             	         <li><label for="address">HOME ADDRESS 			:</label> <input id="" name="address" required="required" type="text" placeholder="d.no, street no,city,pin"/></li>   
             	         <li><label for="occupation">OCCUPATION 		:</label> <input id="" name="occupation" required="required" type="text" placeholder="occupation"/></li>   
             	         <li><label for="office">OFFICE ADDRESS			:</label> <input id="" name="office" type="longtext" placeholder="address"/></li>   
             	         <li><label for="username">CHOOSE YOUR USERNAME	:</label> <input id="" name="username" required="required" type="text" placeholder="user name"/></li>   
             	         <li><label for="password_1">CHOOSE A PASSWORD 		:</label> <input id="passwordsignup" name="password_1" required="required" type="password" placeholder="eg. X8df!90EO"/></li>
             	         <li><label for="password_1c">RETYPE YOUR PASSWORD 	:</label> <input id="passwordsignup" name="password_1c" required="required" type="password" placeholder="eg. X8df!90EO"/></li>
             	         <li><label for="password_2">CHOOSE TRANS. PASSCODE  :</label> <input id="passwordsignup" name="password_2" required="required" type="password" placeholder="eg. X8df!90EO"/></li>   
             	         <li><label for="password_2c">RETYPE TRANS. PASSCODE  :</label> <input id="passwordsignup" name="password_2c" required="required" type="password" placeholder="eg. X8df!90EO"/></li>
             	         
             	         <li style="align-items: center;margin-top: 30px;position: relative;"><p class="signin button"> 
									<input type="submit" value="Sign up" name="btn-signup" /></p></li>

                         <li>
                         	<link rel="stylesheet" type="text/css" href="login_main.css">
                         <p style="margin-top: 50px; margin-left: 120px; position: relative;" id="extra"> Already a member ?
						<a href="index.php" style="display: block; border: 2px, solid, white;"> Go and log in </a></p></li>
				</ol>	
			</div>

			</form>
		
		</div>	
	</body>
</html>