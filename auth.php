<?php
session_start();
//
$con = mysqli_connect("localhost","root","","register");
//$res = mysqli_query($con, "SELECT * FROM 'users' WHERE username='$username'");
     //$_SESSION1 = mysqli_fetch_array($res,MYSQLI_NUM);
     //$res = mysqli_query($con, "SELECT regis FROM 'users' WHERE username='$username'");
     //$_SESSION['regis'] = mysqli_fetch_array($res,MYSQLI_ASSOC);
     //$res = mysqli_query($con, "SELECT years FROM 'users' WHERE username='$username'");
     //$_SESSION['years'] = mysqli_fetch_array($res,MYSQLI_ASSOC);

if(!isset($_SESSION["username"])){
	 
	///mysqli_query($con, "SELECT * FROM Persons")
	header("Location: login.php");
exit(); }
?>


