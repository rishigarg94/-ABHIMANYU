<?php
//include auth.php file on all secure pages
include("auth.php");
//include("login.php");
//require("login.php");
$username=$_SESSION["username"];
$res = mysqli_query($con, "SELECT regis,branch,years,email,cultural,technical,art,swagat,greenclub,spiritual,others FROM `users` WHERE username='$username'") or die( mysqli_error($con));
     $_SESSION1 = mysqli_fetch_array($res,MYSQLI_NUM);

     //$sql = "SELECT * FROM users";
//$result = mysqli_query($db, $sql) or die( mysqli_error($db));
     //SELECT * FROM `users` WHERE username='$username'
?>
<html lang="en">
<head>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  text-align: center;
  background: #1abc9c;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

.main h1{
  color: blue;
}
.main h2{
  color: green;
}
/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}
.fakeimg h3{
  color: black;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <img src="logo1.png">
  <h1>My Dashboard</h1>
  <p>One Place For All Information.</p>
</div>

<div class="navbar">
  <a href="#">Clubs</a>
  <a href="#">Upcoming Events</a>
  
  <a href="index.html" class="right">Log Out</a>
</div>

<div class="row">
  <div class="side">
    <h2>About Me</h2>
    <h5>Photo of me:<?php echo $_SESSION['username']; ?></h5>
    <div class="fakeimg" style="height:200px;">Image</div>
    <p>some text will be edited soon:</p>
    <h3>My Profile:</h3>
    <p></p>
    <div class="fakeimg" style="height:100px;"><h3>Registration no.: <?php echo $_SESSION1[0]; ?></h3></div><br>
    <div class="fakeimg" style="height:100px;"><h3>Branch: <?php echo $_SESSION1[1]; ?></h3></div><br>
    <div class="fakeimg" style="height:100px;"><h3>Year: <?php echo $_SESSION1[2]; ?></h3></div><br>
    <div class="fakeimg" style="height:100px;"><h3>Email Address: <?php echo $_SESSION1[3]; ?></h3></div>
  </div>
  <div class="main">
    <h1 >My Projects:</h1>
    <h2>Cultural:</h2>
    <h5>It consist of various dance and cultural societies</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[4]; ?></h3></div>
    
    <br>
    <h2>Technical:</h2>
    <h5>It consist of various technical and coding societies</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[5]; ?></h3></div>
    <br>
    <h2>Art:</h2>
    <h5>It consist of various art and music societies</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[6]; ?></h3></div>
    <br>
    <h2>Swagat:</h2>
    <h5>It consist of various comitees formed during swagat</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[7]; ?></h3></div>
    <br>
    <h2>Green Club:</h2>
    <h5>It consist of various economical societies</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[8]; ?></h3></div>
    <br>
    <h2>Spiritual:</h2>
    <h5>It consist of various spiritual societies</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[9]; ?></h3></div>
    <br>
    <br>
    <h2>Others:</h2>
    <h5>It consist of other societies which donot lie in any of former group</h5>
    <div class="fakeimg" style="height:90px;"><h3> <?php echo $_SESSION1[10]; ?></h3></div>
    <br>
  </div>
</div>

<div class="footer">
  <h4>P.S.:-- With a scope for building a platform which serves all the need of students,we are also looking to add some students as a part of our project with some pre knowledge in the required fields,which also motivates the newbies and will also help our upcoming juniors for long time.</h4>
</div>

</body>
</html>
