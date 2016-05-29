<?php

$conn = mysqli_connect("localhost","root","","e-banking");

if(!mysqli_connect("localhost","root",""))
{
     die('oops connection problem ! --> '.mysqli_error($conn));
}
if(!mysqli_select_db($conn,"e-banking"))
{
     die('oops database selection problem ! --> '.mysqli_error($conn));
}
?>