<!-- Team !ABHIMANYU -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="styleloginnew.css" />
</head>
<body>
<?php
require('db.php');
//include('registration.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
     //$_SESSION['password'] = $password;
     //$_SESSION['pass'] = $password;

     //$res = mysql_query("SELECT branch FROM 'users' WHERE username='$username' and password='".md5($password)."' ");
     //$_SESSION['branch'] = mysql_fetch_array($res);
     //$_SESSION['regis'] = mysql_query("SELECT regis FROM 'users' WHERE username='$username' and password='".md5($password)."' ");
     //$_SESSION['years'] = mysql_query("SELECT years FROM 'users' WHERE username='$username' and password='".md5($password)."' ");

     //$price = mysql_query("SELECT price FROM products WHERE product = '$product'");
//$result = mysql_fetch_array($price);

//$res = mysql_query("SELECT something FROM somewhere"); // perform the query on the server
//$result = mysql_fetch_array($res); // retrieve the result from the server and put it into the variable $result
//echo $result['something']; // will print out the result you retrieved

    
    

            // Redirect user to index.php
     header("Location: try.php");
         }else{
                echo "<div class='form'>
                <h3>Username/password is incorrect.</h3>
                <br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form">
<form action="" method="post" name="login" class="box">
<h1>Login</h1>
<input type="text" name="username" placeholder="Username" required />
<input type="password" name="password" placeholder="Password" required />
<input name="submit" type="submit" value="Login" />
<p style="color:white";>Not registered yet?  <a href='registration.php' style="color: #3498db";>Register Here</a></p>
<p><a href='index.html' style="color:#3498db";>Back To Homepage</a></p></div></form>
<?php } ?>
</body>
</html>
