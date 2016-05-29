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
 
$sql = "SELECT * FROM todolist WHERE username = '$user' ";

 $data = mysqli_query($conn,$sql) or die("MySQL error: " . mysqli_error($conn) . "<hr>\nQuery: $data"); 

 	while($row = mysqli_fetch_array($data)) 
	{
        echo "name: " . $row["username"]. "sno: " . $row["sno"]. "priority: " . $row["priority"]. "todo : " . $row["todo"]. " end date : " . $row["deadline"]. "<br>";
    }

?>