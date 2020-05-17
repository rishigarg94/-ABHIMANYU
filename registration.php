<!-- Team !ABHIMANYU -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="styleloginnew.css" />
</head>
<body>
<?php
require('db.php');

if (isset($_REQUEST['username'])){

 $username = stripslashes($_REQUEST['username']);

 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
 $branch = stripslashes($_REQUEST['branch']);
 $branch = mysqli_real_escape_string($con,$branch);
 $regis = stripslashes($_REQUEST['regis']);
 $regis = mysqli_real_escape_string($con,$regis);
 $years = stripslashes($_REQUEST['years']);
 $years = mysqli_real_escape_string($con,$years);
        $query = "INSERT into `users` (username, password, email, trn_date, branch, regis, years)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$branch', '$regis', '$years')";
        $result = mysqli_query($con,$query);
        if($result){
        	$_SESSION['branch'] = $branch;
     $_SESSION['regis'] = $regis;
     $_SESSION['years'] = $years;

            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<form name="registration" action="" method="post" class="box">
<h1>Registration</h1>
<input type="text" name="username" placeholder="Username" required />
<input type="text" name="email" placeholder="Email" required />
<input type="text" name="branch" placeholder="Branch" required />
<input type="text" name="regis" placeholder="Registration no." required />
<input type="text" name="years" placeholder="Year(1/2/3/4)" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<p style="color:white";>Already Registered? <a href='login.php' style="color: #3498db";>Login</a></p>
<p style="color:white";> <a href='index.html' style="color: #3498db";>Back To Homepage</a></p>
</form>
</div>
<?php } ?>
</body>
</html>
