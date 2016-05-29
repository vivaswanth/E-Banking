<?php
session_start();
include_once 'dbconnect.php';

$conn = mysqli_connect("localhost","root","","e-banking");

if(isset($_SESSION['user'])!="")
{
 header("Location: home.php");
}

if(isset($_POST['btn-login']))
{
 $user = mysqli_real_escape_string($conn, $_POST['username']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $res=mysqli_query($conn, "SELECT * FROM login WHERE username='$user'");
 $row=mysqli_fetch_array($res);
 if($row['password']==md5($password))
 {
  $_SESSION['user'] = $row['username'];
  header("Location: home.php");
 }
 else
 {
  ?>
        <script>alert('please enter your valid username and password.');</script>
        <?php
 }
 
}
?>

<!DOCTYPE>
<html>
	<head>
		<title>LOGIN PAGE</title>
		
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="login_main.css">
    <script src="login.js"></script>
	</head>

	<body>

  <div id="bg">
	  <img src="images/b32.jpg" alt="">
  </div>

      <nav class="upar" style=" height:60px; ;background: rgba(3,3,3,0.6); position: fixed; " >

            <link rel="stylesheet" type="text/css" href="upper.css">    
            <link rel="stylesheet" type="text/css" href="login_main.css">

            <li id="test" style="font: message-box; font-family:'Verdana',monospace; font-size: 20px; margin: 22px;">SAFE AND SECURE BANKING</li>
            
            <ul>
            <li><a href="index.php" class="current"><span data-title="Home">Home </a></li>
            <li><a href="features.php">Features </a></li> 
            <li><a href="#about">About</a></li>
            <li><a href="safe-banking.php">Safe-banking</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            
            </ul>
      </nav>
          

	
	<div class="login_1">
      <div class="container">
      
      	<h1 id="test">Manage all your transactions with a single touch</h1>
        <h3 id="test2">Switch over to our new E-Banking site, its completely free.!</h3>

        <section id="about">

        <div class="info" style="background: rgba(3,3,3,0.7);">
            <link rel="stylesheet" type="text/css" href="login_main.css">
                <h4>READ MORE HERE...</h4>
                <h3>PERSONAL BANKING</h3>

                <hr>
                
                    <ul>
                        <li>Personal Banking application provides features to administer and manage non personal accounts online.</li>
                        <li>Phishing is a fraudulent attempt, usually made through email, phone calls, SMS etc seeking your personal and confidential information.</li>
                        <li>Online Bank or any of its representative never sends you email/SMS or calls you over phone to get your personal information, password or one time SMS (high security) password.</li>
                        <li>Any such e-mail/SMS or phone call is an attempt to fraudulently withdraw money from your account through Internet Banking. Never respond to such email/SMS or phone call. Please report immediately on reportif you receive any such email/SMS or Phone call. Please lock your user access immediately.
                        </li>
                    </ul>
                  

        </div>   

        </section> 


        <div id="test3">
            <form method="post">
              <h3 style="margin-left: 550px; margin-top: 30px;position: absolute;">Login here</h3>
                  <hr style="color: white; width: 275px;position: absolute;margin-left: 550px;margin-top: 75px;">
                  <br>
                  <div class="login">
                  
                      <input type="text" placeholder="username" name="username"><br>
                      <input type="password" placeholder="password" name="password"><br>
                      <input type="submit" value="Login" name="btn-login">
           
                  </div>

                  <hr style="color: white; width: 275px;position: absolute;margin-left: 550px;margin-top: 215px;">
            </form>      

              <ol id="extra">
               <p><a href="REGISTER.php">Click here to register</a></p>
              </ol>
            
  
        </div> 
  				
	</body>
  
</html>

